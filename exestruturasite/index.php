<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Extrutura Site</title>
</head>
<body>
    <header>
        <?php 
           include "cabecalho.php";
        ?>
    </header>
    <main>
    <?php 
        if (isset($_GET["acao"])) {
                if (file_exists($_GET["acao"].".php")) {
                    include $_GET["acao"].".php";
                } else {
                    include "404.php"; 
                }
        } else {
          include "home.php";
       }
    ?>
    </main>
    <footer>
        <?php 
           include "rodape.php";
        ?>
    </footer>
    
</body>
</html>