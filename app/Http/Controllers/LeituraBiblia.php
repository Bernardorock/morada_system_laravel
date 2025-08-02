<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
require __DIR__ . '/../../../vendor/autoload.php';
use GuzzleHttp\Client;

class LeituraBiblia extends Controller
{
    public function paginaLeitura ()
    {
    return view('MenuRetrato.LeituraBiblia');
    }

    public function escolhaLivro (Request $request)
    {   $livro = $_POST['livro'];
        $capitulo = $_POST['capitulo'];

        try{
        $requisicao = new Client(['base_uri'=> 'https://www.abibliadigital.com.br/api/']);
        $resposta = $requisicao->request('GET','verses/nvi/'.$livro.'/'.$capitulo, 
        [
            
                'headers' => ['Authorization'=>'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdHIiOiJTdW4gSnVsIDI3IDIwMjUgMTk6NTg6MzQgR01UKzAwMDAuYmVybmFyZG8ubG9naXN0aWNhQHlhaG9vLmNvbSIsImlhdCI6MTc1MzY0NjMxNH0.EFfgD-WmIi5gvCCRQhn26-SjJLWMZ_-Xfgywj5N1pBA',
                'Accept'=> 'application/json'
                ]
        ]);
        $conteudo = json_decode($resposta->getBody(), true);
        $textos = $conteudo['verses'];
        
        return view('MenuRetrato.LeituraBiblia', 
        ['textos'=> $textos]
    );
        }catch(Exception $e){
            echo 'Erro de Requisição. Talvez seu capítulo não exista  ' . $e->getMessage();
        }
    }
}
