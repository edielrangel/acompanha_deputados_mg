<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deputado extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_al',
        'nome',
        'partido',
        'partidoEleicao',
        'localizacao',
        'tipoMandato',
        'nomeServidor',
        'sexo',
        'naturalidadeMunicipio',
        'naturalidadeUf',
        'dataNascimento',
        'atividadeProfissional',
        'vidaProfissionalPolitica',
        'atuacaoParlamentar',
        'foto',
    ];

}
