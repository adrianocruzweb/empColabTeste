<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = 'colaboradores';

    protected $fillable=['nome_completo','telefone','email'];
}
