<?php
    include "../../config/configs.php";
    include "../../funcs/generos.funcs.php"; 

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $ligacao = ligarBD();
    $id = $_GET['id'];

    apagarGenero($ligacao, $id);
    }
?>