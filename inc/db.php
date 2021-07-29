<?php
//Criado por @hackergaucho
//v1.0.0 22jul2021 banco sqlite simples
//v1.1.0 29jul2021 cfg.php
require 'vendor/autoload.php';

use Medoo\Medoo;

if (isset($cfg)) {
    return new Medoo($cfg['db']);
} else {
    return new Medoo([
        'database_type' => 'sqlite',
        'database_file' => './db/db.db'
    ]);    
}
