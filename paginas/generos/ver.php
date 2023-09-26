<?php 
    include "../../config/configs.php";
    include "../../funcs/generos.funcs.php";

    $id = $_GET['id'];
    $ligacao = ligarBD();
    $genero = obterGenero($ligacao, $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../ver.css">
    <title>Género<?php echo $genero["nome"];?></title>
</head>
<body class="verBox">
    <?php include "../../comp/nav.php" ?>    
    <h1>Género  <?php echo $genero["nome"];?></h1>
    <div class="verBox2">
    <div class="verBox3">
    <p>
        <label>ID: </label><?php echo $genero['id']; ?><br>
    </p>
    </div>
    <div class="verBox4">
    <p>
        <label>Género: </label><?php echo $genero['nome']; ?><br>
    </p>
    </div>
    </div>
</body>
</html>
