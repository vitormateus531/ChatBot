<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PesquisaEstadoController extends Controller
{
    //

    public function pesquisaRegiaoEstado(){
        
        $estado = Session::get('estado');
        $regiao = DB::table('estado')->select('regiao.Nome as nome_regiao')->join('regiao','estado.Regiao','=','regiao.Id')->where('estado.Nome',$estado)->get(); 
        $regiao_format = json_decode($regiao,true);
        $reg;
        foreach($regiao_format as $item){
            $reg = $item['nome_regiao'];
        }
        
        return $reg;

    }
    
    public function pesquisaMunicipioEstado(){
        
        $estado = Session::get('estado');
        $municipio = DB::table('estado')->join('municipio','estado.Uf','=','municipio.Uf')->where('estado.Nome',$estado)->count(); 
        return $municipio;
    
    }

    public function pesquisaBairroEstado(){
        
        $estado = Session::get('estado');
        $bairro = DB::table('estado')->join('bairro','estado.Uf','=','bairro.Uf')->where('estado.Nome',$estado)->count(); 
        return $bairro;
    
    }

    
    public function pesquisaEstado($bot,$estado){
        
        Session::put('estado',$estado);
        $regiao = $this->pesquisaRegiaoEstado();
        $municipio = $this->pesquisaMunicipioEstado();
        $bairro = $this->pesquisaBairroEstado();

        $bot->reply('Esse estado se localiza na região '.$regiao.', possui '.$municipio.' municípios e '.$bairro.' bairros.');
        $bot->reply('se quiser, pode me mandar outro estado');
  
    }


}
