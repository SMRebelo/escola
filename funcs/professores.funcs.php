<?php  

//Devolve todos os professores da base de dados

function obterProfessores($ligacao){

    $stmt = $ligacao->query("SELECT * FROM professores");
    $professores = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $professores;
}

//Devolve um professor pelo seu ID 

function obterProfessor($ligacao, $id){

    $stmt = $ligacao->prepare("SELECT * FROM professores WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $professor = $stmt->fetch(PDO::FETCH_ASSOC);

    return $professor;
}
//INSERE UM PROFESSOR NA BASE DE DADOS 
function inserirProfessor($ligacao, $nome){

    $stmt = $ligacao->prepare("INSERT INTO professores (nome) VALUES(:nome)");
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    header("Location: ../professores/listar.php");
}
//EDITA UM PROFESSOR NA BASE DE DADOS
function editarProfessor($ligacao, $id, $nome){

    $stmt=$ligacao->prepare("UPDATE professores SET nome=:nome WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    header("Location: ../professores/listar.php");
}
// APAGA UM PROFESSOR DA BASE DE DADOS 
function apagarProfessor($ligacao, $id){
    $stmt = $ligacao->prepare("DELETE FROM professores WHERE id = :id");
    $stmt->bindParam(":id", $id);    
    $stmt->execute();

    header("Location: ../professores/listar.php");
}

?>