<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
{
    // Validação básica dos dados do formulário
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Salvar os dados no banco de dados
    \App\Models\Contact::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'message' => $request->input('message'),
    ]);

    return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
}
}