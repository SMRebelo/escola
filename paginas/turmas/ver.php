<?php 
    include "../../config/configs.php";
    include "../../funcs/turmas.funcs.php";

    $id = $_GET['id'];
    $ligacao = ligarBD();
    $turma = obterTurma($ligacao, $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Turmas<?php echo $turma["nr_turma"];?></title>
</head>
<body>
    <?php include "../../comp/nav.php" ?>    
    <h1>Turma: <?php echo $turma["nr_turma"];?></h1>
    <p>
        <label>ID: </label><?php echo $turma['id']; ?><br>
    </p>
    <p>
        <label>Turma: </label><?php echo $turma['nr_turma']; ?><br>
    </p>
</body>
</html>
