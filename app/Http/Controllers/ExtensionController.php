<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtensionController extends Controller
{
    function Extension ()
    {
        $formatos = []; 
        $arquivos = 
        [
            "musica.mp4",
            "video.mp5",
            "outrovideo.mov",
            "imagem.jpeg",
            "outraImagem.png",
        ];

        foreach($arquivos as $key => $value)
        {
            array_push($formatos, '.' . pathinfo($value, PATHINFO_EXTENSION));
        }
        
        return view('questao3', 
        [
            'data' => $formatos, 
            'arquivos' => $arquivos
        ]);
    }
}
