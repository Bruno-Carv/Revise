<?php

namespace App\Http\Controllers;

use App\modelAnuncio;
use Illuminate\Http\Request;

class controllerAnuncio extends Controller
{




    public function PesquisaFisico(Request $request, modelAnuncio $modelAnuncio){
        $modelFisico = session()->get('Fisico');
        $pesquisa = $request->pesquisa;
        $tipo = $request->tipo;
        $preco = $request->preco;
        $lista = $modelAnuncio->PesquisaDeAnuncio($pesquisa,$tipo,$preco);
        $lista = json_decode($lista);
        return view('Fisico\Anuncio',['Fisico' => $modelFisico, 'Anuncios' => $lista]);
    }

    public function ListaAnunciosFisico(modelAnuncio $modelAnuncio){
        $modelFisico = session()->get('Fisico');
        $lista = $modelAnuncio->listaAnuncio();
        $lista = json_decode($lista);
        return view('Fisico\Anuncio',['Fisico' => $modelFisico, 'Anuncios' => $lista]);
    }

    public function DetalhesAnuncios(Request $request, modelAnuncio $modelAnuncio){
        $modelFisico = session()->get('Fisico');
        $id = $request->id;
        if($id != ''){
            $Anuncio = $modelAnuncio->Anuncio($id);
            $Anuncio = json_decode($Anuncio);
            //return dd($Anuncio);
            return view('Fisico\DetalhesAnuncio',['Fisico' => $modelFisico, 'Anuncio' => $Anuncio]);
        }
        else{
            return redirect()->back();
        }
    }


    public function IndiceTipo(Request $request, modelAnuncio $modelAnuncio){
        $modelJuridico = session()->get('Juridico');
        $indice = $modelAnuncio->IndiceAcesso($modelJuridico->getIdJuridico());
        return json_decode($indice);
    }

    public function IndiceAnuncios(Request $request, modelAnuncio $modelAnuncio){
        $modelJuridico = session()->get('Juridico');
        $Anuncios = $modelAnuncio->IndiceAnuncios($modelJuridico->getIdJuridico());
        return json_decode($Anuncios);
    }



    public function CadastroAnuncio(Request $request){

    }


    public function ControlerDeAnuncioJuridico(Request $request){
        $modelJuridico = session()->get('Juridico');
        return view('Juridico.Anuncio',['Juridico' => $modelJuridico]);
    }

    public function ControlerDeIndiceJuridico(Request $request){
        $modelJuridico = session()->get('Juridico');
        return view('Juridico.Indice',['Juridico' => $modelJuridico]);
    }
}
