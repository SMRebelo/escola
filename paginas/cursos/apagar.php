<?php
    include "../../config/configs.php";
    include "../../funcs/cursos.funcs.php"; 

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $ligacao = ligarBD();
    $id = $_GET['id'];

    apagarCurso($ligacao, $id);
    }
?>