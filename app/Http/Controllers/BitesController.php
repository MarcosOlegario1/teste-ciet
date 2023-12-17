<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BitesController extends Controller
{
    function foiMordido(){
        $mordido = (bool) rand(0, 1);

        return view('questao2', ['data' => $mordido]);
    }
}
