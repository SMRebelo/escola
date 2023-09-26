<?php 
    include "../../config/configs.php";
    include "../../funcs/cursos.funcs.php";

    $id = $_GET['id'];
    $ligacao = ligarBD();
    $curso = obterCurso($ligacao, $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Cursos<?php echo $curso["nome"];?></title>
</head>
<body>
    <?php include "../../comp/nav.php" ?>    
    <h1>Curso: <?php echo $curso["nome"];?></h1>
    <p>
        <label>ID: </label><?php echo $curso['id']; ?><br>
    </p>
    <p>
        <label>Curso: </label><?php echo $curso['nome']; ?><br>
    </p>
</body>
</html>
