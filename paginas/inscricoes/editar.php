<?php
    include "../../config/configs.php";
    include "../../funcs/inscricoes.funcs.php"; 

    $id=$_GET['id'];
    $ligacao=ligarBD();

    $inscricao=obterInscricao($ligacao, $id); 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id=$_POST['id_inscricao'];
        $ano_lectivo=$_POST['ano_lectivo'];
        $data_inicio=$_POST['data_inicio'];

        editarInscricao($ligacao, $id, $ano_lectivo, $data_inicio);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../editar.css">
    <title>Inscrições<?php echo $inscricao['id']; ?></title>
</head>
<body class="editarBox">
    <?php include "../../comp/nav.php"; ?>
    <div class="editarBox2">
    <h1>Editar Inscrição: <?php echo $inscricao['id']; ?></h1>
    <div class="editarBox3">
    <form method="POST">
        <input type="hidden" name="id_inscricao" value="<?php echo $inscricao['id']; ?>">
        <div class="editarInput">
        <label>Ano Lectivo:</label>        
        <input type="text" name="ano_lectivo" value="<?php echo $inscricao['ano_lectivo']; ?>" required>        
        <label>Data Início:</label>                 
        <input type="text" name="data_inicio" value="<?php echo $inscricao['data_inicio']; ?>" required>
        </div>
        <div class="editarButton">
        <input type="submit" value="Editar Inscrição">
        </div>
    </form>
    </div>
    </div>
</body>
</html>