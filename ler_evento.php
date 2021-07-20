<?php
$exibir_erros = require 'inc/exibir_erros.php';
$exibir_erros(true);
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
