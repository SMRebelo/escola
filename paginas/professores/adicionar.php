<?php 
    include "../../config/configs.php";
    include "../../funcs/professores.funcs.php";

    $ligacao = ligarBD();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];

        inserirProfessor($ligacao, $nome);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>inserir Professor<?php echo $professor["nome"];?></title>
</head>
    <body>
        <?php include "../../comp/nav.php" ?>

        <h1>Inserir novo Professor</h1>
        <form method="POST">
            <label>Professor:</label>        
            <br>
            <input type="text" name="nome" required>      
            <br><br>
            <input type="submit" value="Adicionar Professor">
        </form>
    </body>
</html>