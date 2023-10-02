<?php 

// Devolve todos os alunos da base de dados

function obterAlunos($ligacao){

    $stmt = $ligacao->query("SELECT * FROM alunos");
    $alunos = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $alunos;
}

// Devolve um aluno pelo seu ID

function obterAluno($ligacao, $id){
    
    $stmt = $ligacao->prepare("SELECT * FROM alunos WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute(); 
    $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

    return $aluno;
}

// Insere um aluno na base de dados 

function inserirAluno($ligacao, $nome, $data_nascimento, $genero_id, $curso_id, $turma_id, $inscricao_id){
    
    $stmt = $ligacao->prepare("INSERT INTO alunos (nome, data_nascimento, genero_id, curso_id, turma_id, inscricao_id) VALUES (:nome, :data_nascimento, :genero_id, :curso_id, :turma_id, :inscricao_id)");


    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":data_nascimento", $data_nascimento);
    $stmt->bindParam(":genero_id", $genero_id);
    $stmt->bindParam(":curso_id", $curso_id);
    $stmt->bindParam(":turma_id", $turma_id);
    $stmt->bindParam(":inscricao_id", $inscricao_id);
    $stmt->execute();

    header("Location: ../alunos/listar.php");
}

// Edita um aluno na base de dados 

function editarAluno($ligacao, $id, $nome, $data_nascimento, $genero_id, $curso_id, $turma_id, $inscricao_id){

    $stmt=$ligacao->prepare("UPDATE alunos SET nome=:nome, data_nascimento=:data_nascimento, genero_id=:genero_id, curso_id=:curso_id, turma_id=:turma_id, inscricao_id=:inscricao_id WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":data_nascimento", $data_nascimento);
    $stmt->bindParam(":genero_id", $genero_id);
    $stmt->bindParam(":curso_id", $curso_id);
    $stmt->bindParam(":turma_id", $turma_id);
    $stmt->bindParam(":inscricao_id", $inscricao_id);
    $stmt->execute();

    header("Location: ../alunos/listar.php");
}

//Apaga um aluno da base de dados 

function apagarAluno($ligacao, $id){

    $stmt = $ligacao->prepare("DELETE FROM alunos WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("Location: ../alunos/listar.php");

}
?>