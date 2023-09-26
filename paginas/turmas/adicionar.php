<?php 
    include "../../config/configs.php";
    include "../../funcs/turmas.funcs.php";

    $ligacao = ligarBD();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nr_turma = $_POST['nr_turma'];

        inserirTurma($ligacao, $nr_turma);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>inserir nova Turma<?php echo $turma["nr_turma"];?></title>
</head>
    <body>
        <?php include "../../comp/nav.php" ?>

        <h1>Inserir nova Turma</h1>
        <form method="POST">
            <label>Turma:</label>        
            <br>
            <input type="text" name="nr_turma" required>      
            <br><br>
            <input type="submit" value="Adicionar Turma">
        </form>
    </body>
</html>