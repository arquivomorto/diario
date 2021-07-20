<html>
<head>
<title><?php print htmlentities ($evento['evento']);?></title>
</head>
<body>
    <div style="width:400px;margin:0 auto;">
        <h1><a href="index.php">Diário</a></h1>
        <h2><?php print htmlentities($evento['evento']);?></h2>
        <i><?php print date("d.M.Y H:i", $evento['criado_em']);?></i><br><br>
        <?php
        print nl2br($evento['detalhes']);
        ?><br><br>
        <a href="index.php">Página inicial</a>
    </div>
</body>
</html>
