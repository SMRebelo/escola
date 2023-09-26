<?php 
    include "../../config/configs.php";
    include "../../funcs/Generos.funcs.php";

    $ligacao = ligarBD();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];

        inserirGenero($ligacao, $nome);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>inserir novo Géneros <?php echo $editor["nome"];?></title>
</head>
    <body>
        <?php include "../../comp/nav.php" ?>

        <h1>Inserir novo Género</h1>
        <form method="POST">
            <label>Sexo:</label>        
            <br>
            <input type="text" name="nome" required>      
            <br><br>
            <input type="submit" value="Adicionar Género">
        </form>
    </body>
</html>