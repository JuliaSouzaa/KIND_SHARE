<?php

return [
    'date' => 'O campo :attribute precisa ser uma data válida.',
    'before' => 'Você deve ter pelo menos 18 anos para se cadastrar.',

    'required' => 'O campo :attribute é obrigatório.',
    'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'min' => [
        'string' => 'O campo :attribute deve ter pelo menos :min caracteres.',
    ],
    'unique' => 'O :attribute já foi utilizado.',
    'confirmed' => 'A confirmação do campo :attribute não coincide.',
    'password' => [
        'min' => 'A senha deve ter pelo menos :min caracteres.',
    ],
    'attributes' => [
        'email' => 'e-mail',
        'password' => 'senha',
    ],
];

