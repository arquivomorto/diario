<?php
if(file_exists('cfg.php')){
    require 'cfg.php';
}else{
    require 'cfg.exemplo.php';
}
$where=[
    'ORDER'=>['id'=>'DESC']
];
$eventos = $db->select("eventos","*",$where);
require 'view/pagina_inicial_view.php';
