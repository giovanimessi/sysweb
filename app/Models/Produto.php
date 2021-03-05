<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'produtos';

    protected $fillable = [
        'idprodutos',
        'nome',
        'codigo',
        'estoque',
        'descricao',
        'imagem',
        'estado'

    ];
    //trabalhar variaveis salva
    protected $guarded = [];
}
