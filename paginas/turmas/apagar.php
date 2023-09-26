<?php
    include "../../config/configs.php";
    include "../../funcs/turmas.funcs.php"; 

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $ligacao = ligarBD();
    $id = $_GET['id'];

    apagarTurma($ligacao, $id);
    }
?>