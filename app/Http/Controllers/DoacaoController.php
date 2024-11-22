<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Doacao;

class DoacaoController extends Controller
{
   // DoacaoController.php
   public function store(Request $request)
   {
       // Validação dos campos
       $request->validate([
           'nome' => 'required|string|max:255',
           'telefone' => 'required|string|max:20',
           'email' => 'required|email|max:255',
           'instituicao' => 'required|string|max:255',
           'mensagem' => 'nullable|string',
           'arquivo.*' => 'nullable|file|max:2048' // Limite de 2 MB por arquivo
       ]);
   
       // Processa o(s) arquivo(s)
       if ($request->hasFile('arquivo')) {
           foreach ($request->file('arquivo') as $file) {
               // Lê o conteúdo do arquivo
               $arquivoConteudo = file_get_contents($file->getRealPath());
   
               // Cria o registro no banco de dados
               Doacao::create([
                   'nome' => $request->input('nome'),
                   'telefone' => $request->input('telefone'),
                   'email' => $request->input('email'),
                   'instituicao' => $request->input('instituicao'),
                   'mensagem' => $request->input('mensagem'),
                   'arquivo_nome' => $file->getClientOriginalName(),
                   'arquivo' => $arquivoConteudo,
               ]);
           }
       }
   
       // Redireciona com mensagem de sucesso
       return redirect()->route('desapego')->with('success', 'Doação enviada com sucesso!');
   }
   
}