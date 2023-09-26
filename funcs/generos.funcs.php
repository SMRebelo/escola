<?php 

//Devolve todos os generos da base de dados

function obterGeneros($ligacao){

    $stmt = $ligacao->query("SELECT * FROM Genero");
    $generos = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $generos;
}

//Devolve um género literário pelo seu ID 

function obterGenero($ligacao, $id){

    $stmt = $ligacao->prepare("SELECT * FROM Genero WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $genero = $stmt->fetch(PDO::FETCH_ASSOC);

    return $genero;
}
//INSERE UM GENERO NA BASE DE DADOS 
function inserirGenero($ligacao, $nome){

    $stmt = $ligacao->prepare("INSERT INTO Genero (nome) VALUES(:nome)");
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    header("Location: ../Generos/listar.php");
}
//EDITA UM GENERO NA BASE DE DADOS
function editarGenero($ligacao, $id, $nome){

    $stmt=$ligacao->prepare("UPDATE Genero SET nome=:nome WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    header("Location: ../generos/listar.php");
}
// APAGA UM GENERO DA BASE DE DADOS 
function apagarGenero($ligacao, $id){
    $stmt = $ligacao->prepare("DELETE FROM Genero WHERE id = :id");
    $stmt->bindParam(":id", $id);    
    $stmt->execute();

    header("Location: ../generos/listar.php");
}

?>