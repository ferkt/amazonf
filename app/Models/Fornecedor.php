<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $guarded = [];
    protected $table = 'fornecedor';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'endereco',
        'num',
        'bairro',
        'cep',
        'contato',
        'cnpj',
        'insc',
        'tel'
    ];
}