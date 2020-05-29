<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
        "descricao","empresaImovel","paisEndereco","estadoEndereco","cidadeEndereco","logradouroEndereco","bairroEndereco",
        "numeroEndereco","cepEndereco","pontoReferenciaEndereco","imgImovel","preco","qtdQuartos","qtdJanelas","qtdLampadas",
        "qtdBanheiro","garagem","tipo","finalidade"];

    protected $table = "imoveis";
}
