<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ParserFileController extends Controller
{
    function Parser ()
    {
        function xmlParaCSV($xmlFilePath, $csvFilePath) 
        {
            if (!file_exists($xmlFilePath)) 
            {
                die("O arquivo XML não foi encontrado.");
            }
        
            $xml = simplexml_load_file($xmlFilePath);
        
            if ($xml === false) 
            {
                die("Erro ao carregar o arquivo XML.");
            }
        
            $csvFile = fopen($csvFilePath, 'w');
        
            if ($csvFile === false) 
            {
                die("Erro ao abrir o arquivo CSV para escrita.");
            }
        
            $headers = array_keys((array) $xml->children()[0]);
            fputcsv($csvFile, $headers);
        
            foreach ($xml->children() as $element) 
            {
                $rowData = (array) $element;
                fputcsv($csvFile, $rowData);
            }
        
            fclose($csvFile);

            echo "Conversão concluída. Dados do XML foram migrados para o novo arquivo no formato CSV.";
        }
        
        //Arquivo XML usado de exemplo foi copiado de: https://www.w3schools.com/xml/note.xml
        //Para teste, pode-se apenas criar um XML qualquer com o nome do xml descrito abaixo
        //Ou apenas alterar o nome do abaixo por algum que tenha.
        $xmlFilePath =  public_path('arquivo1.xml');
        $csvFilePath =  public_path('arquivo2.csv');
        
        xmlParaCSV($xmlFilePath, $csvFilePath);

        return view('questao5');
    }
}
