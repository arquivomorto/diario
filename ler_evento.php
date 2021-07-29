<?php
if(file_exists('cfg.php')){
    require 'cfg.php';
}else{
    require 'cfg.exemplo.php';
}
$where=[
    'id'=>$_GET['id']
];
$evento = $db->get("eventos","*",$where);
if($evento){
    require 'view/ler_evento_view.php';
}else{
    die("not found");
}
