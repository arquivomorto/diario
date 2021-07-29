<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width; user-scalable=0" />
<title>Diário</title>
</head>
<body style="text-align:center;">
    <div style="width:<?php print $cfg['page']['width'];?>;margin:0 auto;text-align:left;max-width:100%;">
        <h1>Diário</h1>
        <form method="post" action="criar_evento.php">
            <label for="evento">Evento</label><br>
            <input id="evento" type="text" name="evento" style="width:100%;"><br>
            <label for="detalhes">Detalhes</label><br>
            <textarea id="detalhes" name="detalhes" style="width:100%;" rows="5"></textarea><br><br>
            <button type="submit">Criar</button>
        </form>
        <?php
        if($eventos){
            print '<h2>Eventos</h2>';
            print '<ul>';
            foreach($eventos as $evento){
                $href="ler_evento.php?id=".$evento['id'];
                $data=date("d.M.Y H:i", $evento['criado_em']);
                $data= "<a style='text-decoration:none;color:inherit;' href='".$href."'>".$data.'</a>';                 
                $link="<a href='".$href."'>".$evento['evento'].'</a>';                
                if(empty($evento['detalhes'])){
                    $link='<b>'.strip_tags($link).'</b>';
                }
                print '<li>'.$data.' '.$link.'</li>';
            }
            print '</ul>';
        }
        ?>
    </div>
</body>
</html>
