<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apadrinhamento;
use Illuminate\Support\Facades\Auth;

class ApadrinhamentoController extends Controller
{
    public function store(Request $request)
{
    // Valida os campos adicionais do formulário
    $request->validate([
        'sexoPadrinho' => 'required',
        'estadoPadrinho' => 'required',
    ]);

    // Salva os dados no banco
    Apadrinhamento::create([
        'user_id' => Auth::id(),
        'sexo_padrinho' => $request->input('sexoPadrinho'),
        'estado_padrinho' => $request->input('estadoPadrinho'),
    ]);

    // Captura a rota anterior para identificar a instituição
    $previousUrl = url()->previous();

    // Verifica a instituição com base no padrão da URL
    if (str_contains($previousUrl, 'apadrinheAmi')) {
        $instituicao = 'Ami';
    } elseif (str_contains($previousUrl, 'apadrinheComu')) {
        $instituicao = 'Comu';
    } elseif (str_contains($previousUrl, 'apadrinheRede')) {
        $instituicao = 'Rede';
    } elseif (str_contains($previousUrl, 'apadrinheLIRA')) {
        $instituicao = 'LIRA';
    } elseif (str_contains($previousUrl, 'coracao_unido')) {
        $instituicao = ''; // Coração Unido já usa "apadrinhe2"
    } elseif (str_contains($previousUrl, 'apadrinhe')) {
        $instituicao = ''; // Padrão para casos gerais "apadrinhe"
    } else {
        return redirect()->back()->withErrors(['instituicao' => 'Instituição não identificada.']);
    }
    
    

    // Redireciona para a rota específica
    return redirect()->to(url("apadrinhe{$instituicao}2"));
}


}