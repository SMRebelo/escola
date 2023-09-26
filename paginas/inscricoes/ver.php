<?php 
    include "../../config/configs.php";
    include "../../funcs/inscricoes.funcs.php";

    $id = $_GET['id'];
    $ligacao = ligarBD();
    $inscricao = obterInscricao($ligacao, $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../ver.css">
    <title>Inscrição<?php echo $inscricao["id"];?></title>
</head>
<body class="verBox">
    <?php include "../../comp/nav.php" ?>    
    <h1>Inscrição Número: <?php echo $inscricao["id"];?></h1>
    <div class="verBox2">
    <div class="verBox3">
    <p>
        <label>ID: </label><?php echo $inscricao['id']; ?><br>
    </p>
    </div>
    <div class="verBox4">
    <p>
        <label>Ano Lectivo: </label><?php echo $inscricao['ano_lectivo']; ?><br>
    </p>
    <p style="margin-left: 2em;"> 
        <label>Data Início: </label><?php echo $inscricao['data_inicio']; ?><br>
    </p>
    </div>
    </div>
</body>
</html>