<?php
    include "../../config/configs.php";
    include "../../funcs/turmas.funcs.php";

    $ligacao = ligarBD();
    $turmas = obterTurmas($ligacao); 
?>

<!DOCTYPE html>
<html lang="en">  
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style.css">
        <title>Gerir Turmas</title>
    </head>
    <body>
        <?php include "../../comp/nav.php" ?>
        <h1>Gerir Turmas</h1>
        <a href="adicionar.php">Adicionar Turma</a><br><br>
        <table>
            <tr>
                <th>ID</th>
                <th>Número Turma</th>
                <th>Área de Gestão</th>
            </tr>
            <?php  
                foreach ($turmas as $turma) { ?> 
            <tr>
                <td><?php echo $turma['id'];?></td>
                <td><?php echo $turma['nr_turma'];?></td>
                <td>
                    <a href="ver.php?id=<?php echo $turma['id'];?>">Ver</a>
                    <a href="editar.php?id=<?php echo $turma['id'];?>">Editar</a>
                    <a href="apagar.php?id=<?php echo $turma['id'];?>">Apagar</a>
                </td>                
            </tr>
            <?php } ?>
        </table>
        
    </body>
</html>