<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    App::setLocale('pt_BR');
})->name('welcome');

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

