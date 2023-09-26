<?php 
    include "../../config/configs.php";
    include "../../funcs/professores.funcs.php";

    $ligacao = ligarBD();
    $professores = obterProfessores($ligacao);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style.css">
        <title>Professores</title>
    </head>
    <body>
        <?php include "../../comp/nav.php" ?>
        <h1>Gestão de Professores</h1>
        <a href="adicionar.php">Adicionar Professor</a><br><br>
        <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Área de Gestão</th>
        </tr>
        <?php
            foreach($professores as $professor) { ?>
        <tr>
            <td><?php echo $professor['id'];?></td>
            <td><?php echo $professor['nome'];?></td>
        <td>
            <a href="ver.php?id=<?php echo $professor['id'];?>">Ver</a>
            <a href="editar.php?id=<?php echo $professor['id'];?>">Editar</a>
            <a href="apagar.php?id=<?php echo $professor['id'];?>">Apagar</a>
        </td>
        </tr> 
            <?php } ?>    

        </table>
        </body>
</html>