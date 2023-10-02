<?php 

// Devolve todos as disciplinas da base de dados

function obterDisciplinas($ligacao){

    $stmt = $ligacao->query("SELECT * FROM disciplinas");
    $disciplinas = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $disciplinas;
}
//Devolve uma adisciplina pelo seu ID 

function obterDisciplina($ligacao, $id){

    $stmt = $ligacao->prepare("SELECT * FROM disciplinas WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $disciplina = $stmt->fetch(PDO::FETCH_ASSOC);

    return $disciplina;
}
// Insere uma disciplina na base de dados 

function inserirDisciplina($ligacao, $nome){
    
    $stmt = $ligacao->prepare("INSERT INTO disciplinas (nome) VALUES (:nome)");

    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    header("Location: ../disciplinas/listar.php");
}
// Edita uma disciplina na base de dados 

function editarDisciplina($ligacao, $id, $nome){

    $stmt=$ligacao->prepare("UPDATE disciplinas SET nome=:nome WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    header("Location: ../disciplinas/listar.php");
}
//Apaga uma desciplina da base de dados 

function apagarDisciplina($ligacao, $id){

    $stmt = $ligacao->prepare("DELETE FROM disciplinas WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("Location: ../disciplinas/listar.php");

}
?>