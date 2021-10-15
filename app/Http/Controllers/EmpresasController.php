<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use Redirect;
use Session;

class EmpresasController extends Controller
{
    public function index(){
        $empresas = Empresas::get();
        return view('Empresas.list' ,['empresas'=>$empresas] );
    }

    public function new(){
        return view('empresas.form');
    }

    public function add(Request $request){
        $empresa = new Empresas;
        $empresa = $empresa->create($request->all());
        return Redirect::to('/empresas');
    }

    public function update($id, Request $request){
        $empresa = Empresas::findOrFail($id);
        $empresa->update($request->all());
        Session::flash('msg','Atualizado com sucesso');
        return Redirect::to('/empresas');
    }

    public function edit($id){
        $empresa = Empresas::findOrFail($id);
        return view('empresas.form',['empresa'=>$empresa]);
    }

    public function remove($id){
        $empresa = Empresas::findOrFail($id);
        $empresa->delete();
        return Redirect::to('/empresas');
    }
}
