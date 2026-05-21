<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //Método search
    public function search() {

        //Retorna mensagem
        return "Procurando pelo jogo: " . $nome . "...";
    }
}
