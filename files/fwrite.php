<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escrevendo em arquivos com fwrite</title>
</head>
<body>
    <?php
    $filename = 'test.txt';
    if (isset($_POST['frase'])) {
       $linha = $_POST['frase']."\n";
        // Vamos garantir que o arquivo existe e pode ser escrito
        if (is_writable($filename)) {
            // Nesse exemplo estamos abrindo o $filename em modo append.
            // O ponteiro do arquivo estará no final do arquivo
            // e portanto é aqui que $somecontent será posicionado pelo fwrite().
            if (!$fp = fopen($filename, 'a')) {
                echo "Erro ao abrir o ($filename)";
                exit;
            }

            // Escrever alguma coisa no arquivo.
            if (fwrite($fp, $linha) === FALSE) {
                echo "Erro ao escrever no arquivo ($filename)";
                exit;
            }

            echo "Sucesso, escrito ($linha) no arquivo ($filename)<br>";
            fclose($fp);
            echo file_get_contents($filename);
        } else {
            echo "O arquivo não existe ou permite escrita";
        }
    }
    ?>
    <form action="fwrite.php" method="POST">
        <label for="frase">Frase: </label>
        <input name="frase" id="frase">
        <br>
        <button type="submit">Escrever</button>
        <br>
    </form>
    <?php include_once("menu.php"); ?>
</body>
</html>