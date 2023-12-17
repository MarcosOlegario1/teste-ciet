<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class LocationController extends Controller
{
   
    public function Location()
    {

        $locations = 
        [
            'Brasil'    => 'Brasilia',
            'USA'       => 'Washington',
            'Chile'     => 'Santiago',
            'Estonia'   => 'Tallin',
            'Irlanda'   => 'Dublin'
        ];

        $originalLocations = 
        [
            'Brasil'    => 'Brasilia',
            'USA'       => 'Washington',
            'Chile'     => 'Santiago',
            'Estonia'   => 'Tallin',
            'Irlanda'   => 'Dublin'
        ];
        arsort($locations);
        $locations = array_reverse($locations, true);
        
        return view('questao1', ['data' => $locations, 'originalData' => $originalLocations]);
    }
    
}
