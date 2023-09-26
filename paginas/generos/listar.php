<?php 
    include "../../config/configs.php";
    include "../../funcs/generos.funcs.php";

    $ligacao = ligarBD();
    $generos = obterGeneros($ligacao);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style.css">
        <link rel="stylesheet" href="../../styleListar.css">
        <title>Géneros</title>
    </head>
    <body class="listar">
    <div class="boxTop">
        <?php include "../../comp/nav.php" ?>
        <h1>Identidade de Género</h1>
        <a href="adicionar.php">Adicionar Género</a><br><br>
    </div>
        <div class="boxBottom">
        <table>
        <tr class=tableTop>
            <th>ID</th>
            <th>Nome</th>
            <th>Área de Gestão</th>
        </tr>
        <?php
            foreach($generos as $genero) { ?>
        <tr class="tableBottom">
            <td><?php echo $genero['id'];?></td>
            <td><?php echo $genero['nome'];?></td>
        <td class="tableBottomOpcions">
            <a href="ver.php?id=<?php echo $genero['id'];?>">Ver</a>
            <a href="editar.php?id=<?php echo $genero['id'];?>">Editar</a>
            <a href="apagar.php?id=<?php echo $genero['id'];?>">Apagar</a>
        </td>
        </tr> 
            <?php } ?>    

        </table>
    </div>
        </body>
</html>
