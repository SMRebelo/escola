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
        <link rel="stylesheet" href="../../styleListar.css">
        
        <title>Gerir Cursos</title>

    </head>
    <body class=listar>
        <div class="boxTop">
        <?php include "../../comp/nav.php" ?>
        <h1>Gerir Cursos</h1>
        <a href="adicionar.php">Adicionar Curso</a><br><br>
        </div>
        <div class="boxBottom">
        <table>
            <tr class=tableTop>
                <th>ID</th>
                <th>Nome</th>
                <th>Área de Gestão</th>
            </tr>
            <?php  
                foreach ($cursos as $curso) { ?> 
            <tr class="tableBottm">
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
        </div>
        
    </body>
</html>