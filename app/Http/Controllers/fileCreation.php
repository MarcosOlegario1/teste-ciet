<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileCreation extends Controller
{
    function fileCreation()
    {
        //Muitas coisas não teria feito na controller, mas como a ideia seria validar o código, evitei o uso da framework ao máximo.
        

        return view('questao4');
    }
}
