<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar arquivos</title>
</head>
<body>
    <?php
    if (isset($_FILES['arquivo'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["arquivo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["arquivo"]["tmp_name"]);
        if($check !== false) {
            echo "Arquivo é uma imagem - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Arquivo não é uma imagem.";
            $uploadOk = 0;
        }
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Desculpe, arquivo não existe.";
            $uploadOk = 0;
        }
        
        // Check file size
        if ($_FILES["arquivo"]["size"] > 500000) {
            echo "Desculpe, arquivo muito grande. Aceito 5Mb.";
            $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Desculpe, somente  arquivos JPG, JPEG, PNG & GIF são aceitos.";
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Desculpe, seu arquivo não foi enviado.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $target_file)) {
                echo "O arquivo ". htmlspecialchars( basename( $_FILES["arquivo"]["name"])). " foi enviado.";
            } else {
                echo "Desculpe, ocorreu um erro ao enviar o arquivo.";
            }
        }
    }
    ?>
    <!-- ### Para enviar arquivos necessário: enctype="multipart/form-data" no FORM -->
    <form action="fsend.php" method="POST" enctype="multipart/form-data">
        <label for="aquivo">Arquivo: </label>
        <input name="arquivo" id="frase" type="file">
        <br>
        <button type="submit">Enviar</button>
        <br>
    </form>
    <?php include_once("menu.php"); ?>
</body>
</html>