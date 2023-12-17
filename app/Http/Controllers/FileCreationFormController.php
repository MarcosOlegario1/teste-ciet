<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class FileCreationFormController extends Controller
{
    function store(Request $request)
    {
        $arquivo = public_path("registros.txt");
        
        $formValues = $request->all();

        foreach($formValues as $key => $values)
        {
            if($values == null || $values ==  "")
            {
                return response('O campo '. $key . ' não pode estar vazio', 422);
            }
        }

        if(!filter_var($formValues['email'], FILTER_VALIDATE_EMAIL))
        {
            return response('E-mail ou formato de E-mail não reconhecido', 422);
        }

        if(!preg_match('/^[0-9]{10}+$/', $formValues['phone']))
        {
            return response('Número de telefone ou formato de número não reconhecido', 422);
        }

        $formValues['password'] = password_hash($formValues['password'], PASSWORD_BCRYPT);

        return $this->manipularArrayNoArquivo($arquivo, $formValues);
    }

    function manipularArrayNoArquivo($arquivo, $formValues = null) {
        function adicionarArrayAoArquivo($arquivo, $array) {
            fwrite($arquivo, json_encode($array) . PHP_EOL);
        }
    
        function lerArquivo($dadosArquivo) {
            rewind($dadosArquivo);
            $arrays = [];
    
            while (!feof($dadosArquivo)) {
                $linha = fgets($dadosArquivo);
                if (!empty($linha)) {
                    $arrays[] = json_decode($linha, true);
                }
            }
    
            return $arrays;
        }
    
        $dadosArquivo = fopen($arquivo, 'a+');
    
        if ($dadosArquivo) {
            $arraysArmazenados = lerArquivo($dadosArquivo);

            foreach($arraysArmazenados as $key => $value)
            {
                if($value['email'] == $formValues['email'])
                {
                    return response('Email já cadastrado', 422);
                }

                if($value['login'] == $formValues['login'])
                {
                    return response('Login já cadastrado', 422);
                }
            }

            if ($formValues !== null) {
                adicionarArrayAoArquivo($dadosArquivo, $formValues);
                return view('questao4');
            }
    
            fclose($dadosArquivo);
        } else {
            echo "Não foi possível abrir o arquivo.\n";
        }
    }
    
}