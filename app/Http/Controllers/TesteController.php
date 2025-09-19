<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function getHelloWorld() {

        echo 'Primera controller sendo usada';
    }


    public function testeFunction () {

        echo 'Teste de Metodo da Controller';
    }

    public function msgExibition() {

        echo 'Exibição de msg pro usuario';
    }


    public function listproduct($id, $name) {


        return view('testeProdutos', [
            'id' => $id,
            'name'=> $name
        ]);
    }

    public function list($id,$name,$year) {
        
        return view('testeUsuarios', [
            'id' => $id,
            'name' =>$name,
            'year' =>$year 
        ]);
    }
    
    public function msgUser($msg) {

        return view('testeUsuarios', [
            'msg' => $msg
        ]);
    } 
}
