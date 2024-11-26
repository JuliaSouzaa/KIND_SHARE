<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    public function search(Request $request)
{
    $query = strtolower($request->input('q', '')); // Se 'q' estiver vazio, assume uma string vazia.

    // Lista das instituições
    $instituicoes = [
        ['name' => 'Corações Unidos', 'link' => '/coracao_unido', 'image' => '/img/ong1.png'],
        ['name' => 'Lira e Cia', 'link' => '/lira-e-cia', 'image' => '/img/ong2.png'],
        ['name' => 'Vozes da Comunidade', 'link' => '/vozes-da-comunidade', 'image' => '/img/ong3.png'],
        ['name' => 'Rede de Esperança', 'link' => '/rede-de-esperanca', 'image' => '/img/ong4.png'],
        ['name' => 'Amigos do Bem', 'link' => '/amigos-do-bem', 'image' => '/img/ong5.png'],
    ];

    // Filtrar instituições com base na consulta
    $resultados = array_filter($instituicoes, function ($instituicao) use ($query) {
        return strpos(strtolower($instituicao['name']), $query) !== false;
    });

    // Retornar os resultados em JSON
    return response()->json(array_values($resultados));
}
}