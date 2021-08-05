<?php
$cfg = [
    'db'=>[
        'database_type' => 'sqlite',
        'database_file' => './db/db.db'
    ],
    'page'=>[
        'width'=>'700px'
    ]
];
$exibir_erros = require 'inc/exibir_erros.php';
$exibir_erros(true);
$db = require 'inc/db.php';

