<?php
    include "../../config/configs.php";
    include "../../funcs/inscricoes.funcs.php"; 

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $ligacao = ligarBD();
    $id = $_GET['id'];

    apagarInscricao($ligacao, $id);
    }
?>