<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    //O método "index" geralmente serve para listar coisas
    public function index() {
        $livros = ['O Pequeno Principe', 'A Hipotese do Amor', 'Chapeuzinho Amarelo', 'Harry Potter'];

    //O garçom entrega a "view" (a página) com a lista de livros
    return view('lista_livros', ['livros' => $livros]);
    }

    //O método "show" mostra um livro específico
    public function show($id) {
        return "Você está vendo os detalhes do livro número: " .  $id;
    }
}
