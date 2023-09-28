<?php
    include "../../config/configs.php";
    include "../../funcs/alunos.funcs.php"; 

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $ligacao = ligarBD();
    $id = $_GET['id'];

    apagarAluno($ligacao, $id);
    }
?>