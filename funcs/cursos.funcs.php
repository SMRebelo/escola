<?php

// devolve todas os Cursos da base de dados 
function obterCursos($ligacao){

    $stmt = $ligacao->query("SELECT * FROM curso"); 
    $cursos = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $cursos;
}
//Devolve um Curso pelo seu ID 

function obterCurso($ligacao, $id){

    $stmt = $ligacao->prepare("SELECT * FROM curso WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $curso = $stmt->fetch(PDO::FETCH_ASSOC);

    return $curso;
}
//INSERE UM CURSO NA BASE DE DADOS 
function inserirCurso($ligacao, $nome){

    $stmt = $ligacao->prepare("INSERT INTO curso (nome) VALUES(:nome)");
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    header("Location: ../cursos/listar.php");
}
//edita um curso na base de dados

function editarCurso($ligacao, $id, $nome){

    $stmt=$ligacao->prepare("UPDATE curso SET nome=:nome WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    header("Location: ../cursos/listar.php");
}
// APAGA UM CURSO DA BASE DE DADOS 
function apagarCurso($ligacao, $id){
    $stmt = $ligacao->prepare("DELETE FROM curso WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("Location: ../cursos/listar.php"); 
}
?>
