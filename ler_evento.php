<?php
$exibir_erros = require 'inc/exibir_erros.php';
$exibir_erros(true);
if(file_exists('cfg.php')){
    $cfg = require 'cfg.php';
}else{
    $cfg = require 'cfg.exemplo.php';
}
$db = require 'inc/db.php';
$where=[
    'id'=>$_GET['id']
];
$evento = $db->get("eventos","*",$where);
if($evento){
    require 'view/ler_evento_view.php';
}else{
    die("not found");
}
