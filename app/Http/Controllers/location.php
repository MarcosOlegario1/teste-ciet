<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class location extends Controller
{
   
    public function location()
    {

        $locations = array
        ([
            'Brasil'    => 'Brasilia',
            'USA'       => 'Washington',
            'Chile'     => 'Santiago',
            'Estonia'   => 'Tallin',
            'Irlanda'   => 'Dublin'
        ]);

        arsort($locations[0]);
        $locations = array_reverse($locations[0], true);
        
        return view('questao1', ['data' => $locations]);
    }
    
}
