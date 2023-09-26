<?php 
    include "../../config/configs.php";
    include "../../funcs/professores.funcs.php";

    $id = $_GET['id'];
    $ligacao = ligarBD();
    $professor = obterProfessor($ligacao, $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../ver.css">
    <title>Professores<?php echo $professor["nome"];?></title>
</head>
<body class="verBox">
    <?php include "../../comp/nav.php" ?>    
    <h1>Professor  <?php echo $professor["nome"];?></h1>
    <div class="verBox2">
    <div class="verBox3">
    <p>
        <label>ID: </label><?php echo $professor['id']; ?><br>
    </p>
    </div>
    <div class="verBox4">
    <p>
        <label>Nome: </label><?php echo $professor['nome']; ?><br>
    </p>
    </div>
    </div>
</body>
</html>