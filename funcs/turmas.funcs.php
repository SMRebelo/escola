<?php

// devolve todas as turmas da base de dados 
function obterTurmas($ligacao){

    $stmt = $ligacao->query("SELECT * FROM turma"); 
    $turmas = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $turmas;
}
//Devolve uma turma pelo seu ID 

function obterTurma($ligacao, $id){

    $stmt = $ligacao->prepare("SELECT * FROM turma WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $turma = $stmt->fetch(PDO::FETCH_ASSOC);

    return $turma;
}
//INSERE UMA TURMA NA BASE DE DADOS 
function inserirTurma($ligacao, $nr_turma){

    $stmt = $ligacao->prepare("INSERT INTO turma (nr_turma) VALUES(:nr_turma)");
    $stmt->bindParam(":nr_turma", $nr_turma);
    $stmt->execute();

    header("Location: ../turmas/listar.php");
}
//edita uma turma na base de dados

function editarTurma($ligacao, $id, $nr_turma){

    $stmt=$ligacao->prepare("UPDATE turma SET nr_turma=:nr_turma WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nr_turma", $nr_turma);
    $stmt->execute();

    header("Location: ../turmas/listar.php");
}
// APAGA UMA TURMA DA BASE DE DADOS 
function apagarTurma($ligacao, $id){
    $stmt = $ligacao->prepare("DELETE FROM turma WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("Location: ../turmas/listar.php");
}
?>
