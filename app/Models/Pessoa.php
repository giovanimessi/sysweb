<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    
        use HasFactory;
        public $timestamps = false;
       
        protected $primaryKey = 'idpessoas';
        protected $table = "pessoas";
    
        protected $fillable = [
            'tipo_pessoas',
            'nome',
            'tipo_documento',
            'num_documento',
            'endereco',
            'telefone',
            'email',
            'idfornecedor'    
        ];
        //trabalhar variaveis salva
        protected $guarded = [];
    }

