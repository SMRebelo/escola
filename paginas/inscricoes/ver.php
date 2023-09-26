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
<body>
    <?php include "../../comp/nav.php" ?>    
    <h1>Inscrição número: <?php echo $inscricao["id"];?></h1>
    <p>
        <label>ID: </label><?php echo $inscricao['id']; ?><br>
    </p>
    <p>
        <label>Ano Lectivo: </label><?php echo $inscricao['ano_lectivo']; ?><br>
    </p>
    <p>
        <label>Data Início: </label><?php echo $inscricao['data_inicio']; ?><br>
    </p>
</body>
</html>