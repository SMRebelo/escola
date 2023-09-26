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
    <link rel="stylesheet" href="../../adicionar.css">
    <title>inserir novo Géneros <?php echo $editor["nome"];?></title>
</head>
    <body class="adicionarBox">
        <?php include "../../comp/nav.php" ?>
        <div class="adicionarBox2">
        <h1>Adicionar novo Género</h1>
        <div class="adicionarBox3">
        <form method="POST">
        <div class="adicionarInput">
            <label>Sexo:</label>        
            <input type="text" name="nome" required>      
        </div>
        <div class="adicionarButton">
            <input type="submit" value="Adicionar Género">
            </div>
        </form>
        </div>
        </div>
    </body>
</html>