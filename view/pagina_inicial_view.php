<html>
<head>
<title>Diário</title>
</head>
<body>
    <div style="width:400px;margin:0 auto;">
        <h1>Diário</h1>
        <form method="post" action="criar_evento.php">
            <label for="evento">Evento</label><br>
            <input id="evento" type="text" name="evento" style="width:100%;"><br>
            <label for="detalhes">Detalhes</label><br>
            <textarea id="detalhes" name="detalhes" style="width:100%;" rows="5"></textarea><br><br>
            <button type="submit">Criar</button>
        </form>
        <h3>Eventos</h2>
        <?php
        if($eventos){
            print '<ul>';
            foreach($eventos as $evento){
                $data=date("d.M.Y H:i", $evento['criado_em']);
                $href="ler_evento.php?id=".$evento['id'];
                $link="<a href='".$href."'>".$evento['evento'].'</a>';
                print '<li>'.$data.' '.$link.'</li>';
            }
            print '</ul>';
        }
        ?>
    </div>
</body>
</html>
