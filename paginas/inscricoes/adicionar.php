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
    <link rel="stylesheet" href="../../adicionar.css">
    <title>inserir Inscrições<?php echo $inscricao["id"];?></title>
</head>
    <body class="adicionarBox">
        <?php include "../../comp/nav.php" ?>
        <div class="adicionarBox2">
        <h1>Adicionar nova Inscrição</h1>
        <div class="adicionarBox3">
        <form method="POST">
        <div class="adicionarInput">
            <label>Ano Lectivo:</label>        
            
            <input type="text" name="ano_lectivo" required>
            
            <label>Data Início:</label>        
           
            <input type="text" name="data_inicio" required>      
        </div>
        <div class="adicionarButton">
            <input type="submit" value="Adicionar Inscrição">
            </div>
        </form>
        </div>
        </div>
    </body>
</html>