<?php 
    include "../../config/configs.php";
    include "../../funcs/turmas.funcs.php";

    $ligacao = ligarBD();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nr_turma = $_POST['nr_turma'];

        inserirTurma($ligacao, $nr_turma);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../adicionar.css">
    <title>Inserir nova Turma<?php echo $turma["nr_turma"];?></title>
</head>
    <body class="adicionarBox">
        <?php include "../../comp/nav.php" ?>
        <div class="adicionarBox2">
        <h1>Adicionar nova Turma</h1>
        <div class="adicionarBox3">
        <form method="POST">
        <div class="adicionarInput">
            <label>Turma:</label>        
           
            <input type="text" name="nr_turma" required>      
            </div>
            <div class="adicionarButton">
            <input type="submit" value="Adicionar Turma">
            </div>
        </form>
        </div>
        </div>
    </body>
</html>