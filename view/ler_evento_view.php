<html>
<head>
<title><?php print htmlentities ($evento['evento']);?></title>
</head>
<body style="text-align:center;">
    <div style="width:600px;margin:0 auto;text-align:left">
        <h1><a href="index.php">Diário</a></h1>
        <h2><?php print htmlentities($evento['evento']);?></h2>
        <i><?php print date("d.M.Y H:i", $evento['criado_em']);?></i><br><br>
        <?php
        print nl2br(htmlentities($evento['detalhes']));
        if(!empty($evento['detalhes'])){
            print '<br><br>';
        }
        ?>
        <a href="index.php">Página inicial</a>
    </div>
</body>
</html>
