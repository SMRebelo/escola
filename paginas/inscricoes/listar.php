<?php 
    include "../../config/configs.php";
    include "../../funcs/inscricoes.funcs.php";

    $ligacao = ligarBD();
    $inscricoes = obterInscricoes($ligacao);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style.css">
        <title>Gerir Inscrições</title>
    </head>
    <body>
        <?php include "../../comp/nav.php" ?>
        <h1>Gerir Inscrições</h1>
        <a href="adicionar.php">Adicionar Inscrição</a><br><br>
        <table>
        <tr>
            <th>ID</th>
            <th>Ano Lectivo</th>
            <th>Data Inicio</th>
            <th>Área de Gestão</th>
        </tr>
        <?php
            foreach($inscricoes as $inscricao) { ?>
        <tr>
            <td><?php echo $inscricao['id'];?></td>
            <td><?php echo $inscricao['ano_lectivo'];?></td>
            <td><?php echo $inscricao['data_inicio'];?></td>
        <td>
            <a href="ver.php?id=<?php echo $inscricao['id'];?>">Ver</a>
            <a href="editar.php?id=<?php echo $inscricao['id'];?>">Editar</a>
            <a href="apagar.php?id=<?php echo $inscricao['id'];?>">Apagar</a>
        </td>
        </tr> 
            <?php } ?>    

        </table>
        </body>
</html>