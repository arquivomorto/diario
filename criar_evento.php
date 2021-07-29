<?php
if(file_exists('cfg.php')){
    require 'cfg.php';
}else{
    require 'cfg.exemplo.php';
}
$data=[
    'evento'=>$_POST['evento'],
    'detalhes'=>$_POST['detalhes'],
    'criado_em'=>time()
];
$db->insert('eventos', $data);
$id_do_evento=$db->id();
if($id_do_evento){
    $url='ler_evento.php?id='.$id_do_evento;
    header('Location: '.$url);
}else{
    print '<pre>';
    var_export($db->error());
}
