<?php 

// Devolve todos os alunos da base de dados

function obterAlunos($ligacao){

    $stmt = $ligacao->query("SELECT a.id, a.nome nome_aluno, a.data_nascimento, g.nome genero, c.nome curso, t.nr_turma turma, a.inscricao_id  FROM alunos a, genero g, curso c, turma t where a.genero_id = g.id and  a.curso_id = c.id and a.turma_id = t.id");

    $alunos = $stmt->fetchALL(PDO::FETCH_ASSOC);

    return $alunos;
}

// Devolve um aluno pelo seu ID

function obterAluno($ligacao, $id) {
    $stmt = $ligacao->prepare("SELECT a.id, a.nome, a.data_nascimento, g.nome genero, c.nome curso, t.nr_turma turma, a.inscricao_id 
        FROM alunos a
        INNER JOIN genero g ON a.genero_id = g.id 
        INNER JOIN curso c ON a.curso_id = c.id 
        INNER JOIN turma t ON a.turma_id = t.id 
        WHERE a.id = :id");

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