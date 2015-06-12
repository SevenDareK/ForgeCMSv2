<?php
require __DIR__.'/src/autoloader.php';

use FormManager\Builder as F;
use FormManager\InvalidValueException;

$form = F::Form([
    'nome' => F::text()->label('O teu nome')->addValidator(function ($input) {
        if ($input->val() !== 'Lolo') {
            throw new InvalidValueException("Nome non valido, debe ser Lolo");
        }
    }),
    'apelido' => F::text()->label('O teu apelido'),
    'idade' => F::select()
        ->options([
            1 => 'Menor de idade',
            2 => 'Maiore de idade',
        ])
        ->label('Idade')
        ->render(function ($input) {
            return '<p>'.$input.'</p>';
        }),
    'data' => F::group([
        'dia' => F::number()->label('Dia'),
        'mes' => F::number()->label('Mes'),
    ]),
    'colores' => F::choose([
        'red' => F::radio()->label('Red'),
        'blue' => F::radio()->label('Blue'),
        'green' => F::radio()->label('Green'),
    ]),
    'personas' => F::collection([
        'nome' => F::text()->label('Nome'),
        'apelido' => F::text()->label('Apelidos'),
    ]),
    'bloques' => F::collectionMultiple([
        'texto' => [
            'titulo' => F::text()->label('Titulo'),
            'texto' => F::textarea()->label('Texto'),
        ],
        'cita' => [
            'texto' => F::textarea()->label('Texto'),
            'autor' => F::text()->label('Autor'),
        ],
    ]),
    'enviar' => F::submit()->html('Enviar'),
]);

$form['nome']->errorLabel->class('my-error');

$form->loadFromGlobals();

if (!$form->isValid()) {
    echo 'Invalid values';
}

echo $form;
