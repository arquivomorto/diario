<?php
$exibir_erros = require 'inc/exibir_erros.php';
$exibir_erros(true);
$db = require 'inc/db.php';
$where=[
    'ORDER'=>['id'=>'DESC']
];
$eventos = $db->select("eventos","*",$where);
require 'view/index_view.php';
