<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>enviar imagem</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Selecione a imagem:</label><br><br>
        <input type="file" name="imagem" required><br><br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="index.php">voltar para a galeria</a>

</body>

</html>