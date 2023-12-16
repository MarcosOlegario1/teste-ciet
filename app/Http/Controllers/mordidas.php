<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mordidas extends Controller
{
    function foiMordido(){
        //Essa questão não especifica muito bem como ela deve ser entendida, falta informações para complementar e dar um escopo mais definido.
        $mordido = (bool) rand(0, 1);

        return view('questao2', ['data' => $mordido]);
    }
}
