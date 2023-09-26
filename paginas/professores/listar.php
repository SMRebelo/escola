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
        <link rel="stylesheet" href="../../styleListar.css">
        <title>Professores</title>
    </head>
    <body class=listar>
    <div class="boxTop">
        <?php include "../../comp/nav.php" ?>
        <h1>Gestão de Professores</h1>
        <a href="adicionar.php">Adicionar Professor</a><br><br>
    </div>
    <div class="boxBottom">
        <table>
        <tr class=tableTop>
            <th>ID</th>
            <th>Nome</th>
            <th>Área de Gestão</th>
        </tr>
        <?php
            foreach($professores as $professor) { ?>
        <tr class="tableBottom">
            <td><?php echo $professor['id'];?></td>
            <td><?php echo $professor['nome'];?></td>
        <td class="tableBottomOpcions">
            <a href="ver.php?id=<?php echo $professor['id'];?>">Ver</a>
            <a href="editar.php?id=<?php echo $professor['id'];?>">Editar</a>
            <a href="apagar.php?id=<?php echo $professor['id'];?>">Apagar</a>
        </td>
        </tr> 
            <?php } ?>    

        </table>
    </div>
        </body>
</html>