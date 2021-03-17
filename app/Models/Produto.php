<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'idprodutos';
    

    protected $table = 'produtos';

    protected $fillable = [
     
        'id',
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
