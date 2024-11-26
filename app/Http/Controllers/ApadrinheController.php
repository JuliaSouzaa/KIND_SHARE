<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ApadrinheController extends Controller
{
    public function show()
    {

    // Obtém o usuário atualmente autenticado
    $user = Auth::user();

    // Verifique se a view 'profile' existe
    if (view()->exists('apadrinhe')) {
        return view('apadrinhe', [
            'user' => $user, // Passa o usuário autenticado para a view
        ]);
    }
        // Verifique se a view existe
        if (view()->exists('apadrinhe')) {
            return view('apadrinhe');
        }

        // Se não existir, redirecione para a view 'welcome'
        return view('welcome');
    }
    
    public function storeApadrinhe(Request $request)
    {
        // Validação dos campos
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cpf' => 'required|string|max:14', // Valide o formato do CPF conforme necessário
            'nascimento' => 'required|date',
            'phone' => 'required|string|max:15', // Valide o formato do telefone
            'sexoPadrinho' => 'required|string',
            'estadoPadrinho' => 'required|string|max:2',
        ]);

        // Salvar os dados no banco de dados ou realizar a lógica desejada
        // Exemplo de atualização do usuário logado:
        $user = auth()->user();
        $user->update($validated);

        // Redirecionar para a próxima página (dashboard/apadrinhe2)
        return redirect()->route('dashboard.apadrinhe2')->with('success', 'Dados salvos com sucesso!');
    }
}
