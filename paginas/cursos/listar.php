<?php
    include "../../config/configs.php";
    include "../../funcs/cursos.funcs.php";

    $ligacao = ligarBD();
    $cursos = obterCursos($ligacao); 
?>

<!DOCTYPE html>
<html lang="en">  
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style.css">
        <title>Gerir Cursos</title>

    </head>
    <body>
        <div class="box2">
        <?php include "../../comp/nav.php" ?>
        <h1>Gerir Cursos</h1>
        <a href="adicionar.php">Adicionar Curso</a><br><br>
        </div>
        <table>
            <tr class="tableBox">
                <th class="id">ID</th>
                <th class="nome">Nome</th>
                <th class="area">Área de Gestão</th>
            </tr>
            <?php  
                foreach ($cursos as $curso) { ?> 
            <tr class="tableBox">
                <td><?php echo $curso['id'];?></td>
                <td><?php echo $curso['nome'];?></td>
                <td>
                    <a href="ver.php?id=<?php echo $curso['id'];?>">Ver</a>
                    <a href="editar.php?id=<?php echo $curso['id'];?>">Editar</a>
                    <a href="apagar.php?id=<?php echo $curso['id'];?>">Apagar</a>
                </td>                
            </tr>
            <?php } ?>
        </table>
        
    </body>
</html>