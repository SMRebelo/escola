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
    <title>Inscrições<?php echo $inscricao['id']; ?></title>
</head>
<body>
    <?php include "../../comp/nav.php"; ?>
    <h1>Editar Inscrição<?php echo $inscricao['id']; ?></h1>

    <form method="POST">
        <input type="hidden" name="id_inscricao" value="<?php echo $inscricao['id']; ?>">
        <label>Ano Lectivo:</label>
        <br>
        <input type="text" name="ano_lectivo" value="<?php echo $inscricao['ano_lectivo']; ?>" required>
        <br>
        <label>Data Início:</label>
        <br>
        <input type="text" name="data_inicio" value="<?php echo $inscricao['data_inicio']; ?>" required>
        <br><br>
        <input type="submit" value="Editar Inscrição">
    </form>
</body>
</html>