<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoacaoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InstituicaoController;

Route::get('/instituicoes/search', [InstituicaoController::class, 'search'])->name('instituicoes.search');



Route::post('/doacao/store', [DoacaoController::class, 'store'])->name('doacao.store');

Route::get('/doacao/download/{id}', [DoacaoController::class, 'download'])->name('doacao.download');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');




Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/', function () {
    return view('welcome');
    App::setLocale('pt_BR');
})->name('welcome');

Route::get('/pagamento0', function () {
    App::setLocale('pt_BR'); // (opcional, se necessário)
    return view('pagamento0');
})->name('pagamento0');

Route::get('/pagamento1', function () {
    App::setLocale('pt_BR'); // (opcional, se necessário)
    return view('pagamento1');
})->name('pagamento1');

Route::get('/pagamento2', function () {
    App::setLocale('pt_BR'); // (opcional, se necessário)
    return view('pagamento2');
})->name('pagamento2');


Route::get('/pagamento3', function () {
    return view('pagamento3');
});

Route::get('/pagamento4', function () {
    return view('pagamento4');
});

Route::get('/pagamento5', function () {
    return view('pagamento5');
});

Route::get('/cartao', function () {
    return view('cartao');
});
/*apadrinhe*/
Route::get('/apadrinhe', function () {
    return view('apadrinhe');
});

Route::get('/apadrinhe2', function () {
    return view('apadrinhe2');
});

Route::get('/apadrinhe3', function () {
    return view('apadrinhe3');
});

Route::get('/apadrinhe4', function () {
    return view('apadrinhe4');
});
/*apadrinhe lira*/
Route::get('/apadrinheLIRA', function () {
    return view('apadrinheLIRA');
});

Route::get('/apadrinheLIRA2', function () {
    return view('apadrinheLIRA2');
});
Route::get('/apadrinheLIRA3', function () {
    return view('apadrinheLIRA3');
});
Route::get('/apadrinheLIRA4', function () {
    return view('apadrinheLIRA4');
});

/*apadrinhe comu*/
Route::get('/apadrinheComu', function () {
    return view('apadrinheComu');
});

Route::get('/apadrinheComu2', function () {
    return view('apadrinheComu2');
});
Route::get('/apadrinheComu3', function () {
    return view('apadrinheComu3');
});
Route::get('/apadrinheComu4', function () {
    return view('apadrinheComu4');
});
/*apadrinhe rede*/

Route::get('/apadrinheRede', function () {
    return view('apadrinheRede');
});

Route::get('/apadrinheRede2', function () {
    return view('apadrinheRede2');
});
Route::get('/apadrinheRede3', function () {
    return view('apadrinheRede3');
});
Route::get('/apadrinheRede4', function () {
    return view('apadrinheRede4');
});
/*apadrinhe amigos do bem*/
Route::get('/apadrinheAmi', function () {
    return view('apadrinheAmi');
});
Route::get('/apadrinheAmi2', function () {
    return view('apadrinheAmi2');
});
Route::get('/apadrinheAmi3', function () {
    return view('apadrinheAmi3');
});
Route::get('/apadrinheAmi4', function () {
    return view('apadrinheAmi4');
});

Route::get('/amigos-do-bem', function () {
    return view('amigos-do-bem');
    App::setLocale('pt_BR');
})->name('amigos-do-bem');

Route::get('/coracao_unido', function () {
    return view('coracao_unido');
    App::setLocale('pt_BR');
})->name('coracao_unido');


Route::get('/criança1(coracao_unido)', function () {
    return view('criança1(coracao_unido)');
    App::setLocale('pt_BR');
})->name('criança1(coracao_unido)');


Route::get('/criança1(Lira-e-Cia)', function () {
    return view('criança1(Lira-e-Cia)');
    App::setLocale('pt_BR');
})->name('criança1(Lira-e-Cia)');

Route::get('/criança2(coracao_unido)', function () {
    return view('criança2(coracao_unido)');
    App::setLocale('pt_BR');
})->name('criança2(coracao_unido)');

Route::get('/criança2(Lira-e-Cia)', function () {
    return view('criança2(Lira-e-Cia)');
    App::setLocale('pt_BR');
})->name('criança2(Lira-e-Cia)');

Route::get('/criança3(coracao_unido)', function () {
    return view('criança3(coracao_unido)');
    App::setLocale('pt_BR');
})->name('criança3(coracao_unido)');

Route::get('/criança3(Lira-e-Cia)', function () {
    return view('criança3(Lira-e-Cia)');
    App::setLocale('pt_BR');
})->name('criança3(Lira-e-Cia)');


/* vozes da comunidade*/

Route::get('/criança1(vozes-da-comunidade)', function () {
    return view('criança1(vozes-da-comunidade)');
    App::setLocale('pt_BR');
})->name('criança1(vozes-da-comunidade)');


Route::get('/criança2(vozes-da-comunidade)', function () {
    return view('criança2(vozes-da-comunidade)');
    App::setLocale('pt_BR');
})->name('criança2(vozes-da-comunidade)');

Route::get('/criança3(vozes-da-comunidade)', function () {
    return view('criança3(vozes-da-comunidade)');
    App::setLocale('pt_BR');
})->name('criança3(vozes-da-comunidade)');

/* rede de esperança*/


Route::get('/criança1(rede-de-esperanca)', function () {
    return view('criança1(rede-de-esperanca)');
    App::setLocale('pt_BR');
})->name('criança1(rede-de-esperanca)');

Route::get('/criança2(rede-de-esperanca)', function () {
    return view('criança2(rede-de-esperanca)');
    App::setLocale('pt_BR');
})->name('criança2(rede-de-esperanca)');

Route::get('/criança3(rede-de-esperanca)', function () {
    return view('criança3(rede-de-esperanca)');
    App::setLocale('pt_BR');
})->name('criança3(rede-de-esperanca)');

/* Amigos do bem*/

Route::get('/criança1(amigos-do-bem)', function () {
    return view('criança1(amigos-do-bem)');
    App::setLocale('pt_BR');
})->name('criança1(amigos-do-bem)');

Route::get('/criança2(amigos-do-bem)', function () {
    return view('criança2(amigos-do-bem)');
    App::setLocale('pt_BR');
})->name('criança2(amigos-do-bem)');

Route::get('/criança3(amigos-do-bem)', function () {
    return view('criança3(amigos-do-bem)');
    App::setLocale('pt_BR');
})->name('criança3(amigos-do-bem)');



Route::get('/desapego', function () {
    return view('desapego');
    App::setLocale('pt_BR');
})->name('desapego');

Route::get('/doação', function () {
    return view('doação');
    App::setLocale('pt_BR');
})->name('doação');

Route::get('/envolva-se', function () {
    return view('envolva-se');
    App::setLocale('pt_BR');
})->name('envolva-se');

Route::get('/equipe', function () {
    return view('equipe');
    App::setLocale('pt_BR');
})->name('equipe');

Route::get('/instituicoes', function () {
    return view('instituicoes');
});

Route::get('/lira-e-cia', function () {
    return view('lira-e-cia');
});

Route::get('/lista_necessidades', function () {
    return view('lista_necessidades');
});


Route::get('/rede-de-esperanca', function () {
    return view('rede-de-esperanca');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/vozes-da-comunidade', function () {
    return view('vozes-da-comunidade');
});


Route::get('/dashboard', function () {
    return view('dashboard');
    App::setLocale('pt_BR');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    App::setLocale('pt_BR');
    Route::get('/profile', [ProfileController::class, 'show']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';