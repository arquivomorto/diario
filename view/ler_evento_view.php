<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width; user-scalable=0" />
<title><?php print htmlentities ($evento['evento']);?></title>
</head>
<body style="text-align:center;">
    <div style="width:<?php print $cfg['page']['width'];?>;margin:0 auto;text-align:left;max-width:100%;">
        <h1><a href="index.php">Diário</a></h1>
        <?php print date("d.M.Y H:i", $evento['criado_em']);?>       
        <h2><?php print htmlentities($evento['evento']);?></h2>
        <?php
        if(!empty($evento['detalhes'])){
            print '<pre style="width: 100%;overflow: auto;padding-bottom:1.5em;">';
            print htmlentities($evento['detalhes']);        
            print '</pre>';
        }
        ?>
        <a href="index.php">Página inicial</a>
    </div>
</body>
</html>



