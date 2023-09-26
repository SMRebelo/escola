<?php 

//Devolve todas as inscrições da base de dados

function obterInscricoes($ligacao){

    $stmt = $ligacao->query("SELECT * FROM inscricoes");
    $inscricoes = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $inscricoes;
}

//Devolve uma inscrição literário pelo seu ID 

function obterInscricao($ligacao, $id){

    $stmt = $ligacao->prepare("SELECT * FROM inscricoes WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $inscricao = $stmt->fetch(PDO::FETCH_ASSOC);

    return $inscricao;
}
//INSERE UMA INSCRIÃO NA BASE DE DADOS 
function inserirInscricao($ligacao, $ano_lectivo, $data_inicio){

    $stmt = $ligacao->prepare("INSERT INTO inscricoes (ano_lectivo, data_inicio) VALUES(:ano_lectivo, :data_inicio)");
    $stmt->bindParam(":ano_lectivo", $ano_lectivo);
    $stmt->bindParam(":data_inicio", $data_inicio);
    $stmt->execute();

    header("Location: ../inscricoes/listar.php");
}
//EDITA UMA INSCRIÇÃO NA BASE DE DADOS
function editarInscricao($ligacao, $id, $ano_lectivo, $data_inicio){

    $stmt=$ligacao->prepare("UPDATE inscricoes SET ano_lectivo=:ano_lectivo, data_inicio=:data_inicio WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":ano_lectivo", $ano_lectivo);
    $stmt->bindParam(":data_inicio", $data_inicio);
    $stmt->execute();

    header("Location: ../inscricoes/listar.php");
}
// APAGA UMA INSCRIÇÃO DA BASE DE DADOS 
function apagarInscricao($ligacao, $id){
    $stmt = $ligacao->prepare("DELETE FROM inscricoes WHERE id = :id");
    $stmt->bindParam(":id", $id);    
    $stmt->execute();

    header("Location: ../inscricoes/listar.php");
}

?>