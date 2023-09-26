<?php 
    include "../../config/configs.php";
    include "../../funcs/inscricoes.funcs.php";

    $ligacao = ligarBD();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $ano_lectivo = $_POST['ano_lectivo'];
        $data_inicio = $_POST['data_inicio'];

        inserirInscricao($ligacao, $ano_lectivo, $data_inicio);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>inserir Inscrições<?php echo $inscricao["id"];?></title>
</head>
    <body>
        <?php include "../../comp/nav.php" ?>

        <h1>Inserir nova Inscrição</h1>
        <form method="POST">
            <label>Ano Lectivo:</label>        
            <br>
            <input type="text" name="ano_lectivo" required>
            <br>
            <label>Data Início:</label>        
            <br>
            <input type="text" name="data_inicio" required>      
            <br><br>
            <input type="submit" value="Adicionar Inscrição">
        </form>
    </body>
</html>