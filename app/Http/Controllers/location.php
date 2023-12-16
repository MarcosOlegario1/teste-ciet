<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class location extends Controller
{
   
    public function location()
    {

        $locations = 
        [
            'Brasil'    => 'Brasilia',
            'USA'       => 'Washington',
            'Chile'     => 'Santiago',
            'Estonia'   => 'Tallin',
            'Irlanda'   => 'Dublin'
        ];

        arsort($locations);
        $locations = array_reverse($locations, true);
        
        return view('questao1', ['data' => $locations]);
    }
    
}
