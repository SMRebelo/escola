<?php
    include "../../config/configs.php";
    include "../../funcs/generos.funcs.php"; 

    $id=$_GET['id'];
    $ligacao=ligarBD();

    $genero=obterGenero($ligacao, $id); 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id=$_POST['id_genero'];
        $nome=$_POST['nome'];

        editarGenero($ligacao, $id, $nome);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Sexualidades<?php echo $genero['nome']; ?></title>
</head>
<body>
    <?php include "../../comp/nav.php"; ?>
    <h1>Editar Sexualidade<?php echo $genero['nome']; ?></h1>

    <form method="POST">
        <input type="hidden" name="id_genero" value="<?php echo $genero['id']; ?>">
        <label>Género:</label>
        <br>
        <input type="text" name="nome" value="<?php echo $genero['nome']; ?>" required>
        <br><br>
        <input type="submit" value="Editar Géneros">
    </form>
</body>
</html>