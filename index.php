<?php
$exibir_erros = require 'inc/exibir_erros.php';
$exibir_erros(true);
if(file_exists('cfg.php')){
    $cfg = require 'cfg.php';
}else{
    $cfg = require 'cfg.example.php';
}
$db = require 'inc/db.php';
$where=[
    'ORDER'=>['id'=>'DESC']
];
$eventos = $db->select("eventos","*",$where);
require 'view/pagina_inicial_view.php';
