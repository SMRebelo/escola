<?php
    include "../../config/configs.php";
    include "../../funcs/alunos.funcs.php"; 
    include "../../funcs/generos.funcs.php"; 
    include "../../funcs/cursos.funcs.php"; 
    include "../../funcs/turmas.funcs.php"; 
    include "../../funcs/inscricoes.funcs.php"; 


    $id=$_GET['id'];
    $ligacao=ligarBD();

    $aluno=obterAluno($ligacao, $id); 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){ 

        $id=$_POST['id_aluno'];
        $nome=$_POST['nome'];
        $data_nascimento=$_POST['data_nascimento'];
        $genero_id=$_POST['genero_id'];
        $curso_id=$_POST['curso_id'];
        $turma_id=$_POST['turma_id'];
        $inscricao_id=$_POST['inscricao_id'];

        editarAluno($ligacao, $id, $nome, $data_nascimento, $genero_id, $curso_id, $turma_id, $inscricao_id);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../alunos.css">
    <title>Alunos<?php echo $aluno['nome']; ?></title>
</head>
<body class="alunoEditarBox">
    <?php include "../../comp/nav.php"; ?>
    <div class="alunoEditarBox2">
    <h1>Editar Aluno: <?php echo $aluno['nome']; ?></h1>
    <div class="alunoEditarBox3">
    <form method="POST">
        <input type="hidden" name="id_aluno" value="<?php echo $aluno['id']; ?>">
        


        <div class="alunoEditarInput">
        <label for="nome">Aluno:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $aluno['nome']; ?>" required>

        <label for="data_nascimento">Data Nascimento:</label>
        <input type="text" id="data_nascimento" name="data_nascimento" value="<?php echo $aluno['data_nascimento']; ?>" required>

        <label for="genero_id">Género:</label>
                    <select id="genero_id" name="genero_id" required>
                        <?php
                        $generos = obterGeneros($ligacao);
                        foreach ($generos as $genero) {
                            $selected = ($genero['id'] == $aluno['genero_id']) ? 'selected' : '';
                            echo '<option value="' . $genero['id'] . '" ' . $selected . '>' . $genero['nome'] . '</option>';
                        }
                        ?>
                    </select>

        <label for="curso_id">Curso:</label>
                    <select id="curso_id" name="curso_id" required>
                        <?php
                        $cursos = obterCursos($ligacao);
                        foreach ($cursos as $curso) {
                            $selected = ($curso['id'] == $aluno['curso_id']) ? 'selected' : '';
                            echo '<option value="' . $curso['id'] . '" ' . $selected . '>' . $curso['nome'] . '</option>';
                        }
                        ?>
                    </select>

        <label for="turma_id">Turma:</label>
                    <select id="turma_id" name="turma_id" required>
                        <?php
                        $turmas = obterTurmas($ligacao);
                        foreach ($turmas as $turma) {
                            $selected = ($turma['id'] == $aluno['turma_id']) ? 'selected' : '';
                            echo '<option value="' . $turma['id'] . '" ' . $selected . '>' . $turma['nr_turma'] . '</option>';
                        }
                        ?>
                    </select>

                    <label for="inscricao_id">Inscrição:</label>
                    <select id="inscricao_id" name="inscricao_id" required>
                        <?php
                        $inscricoes = obterInscricoes($ligacao);
                        foreach ($inscricoes as $inscricao) {
                            $selected = ($inscricao['id'] == $aluno['inscricao_id']) ? 'selected' : '';
                            echo '<option value="' . $inscricao['id'] . '" ' . $selected . '>' . $inscricao['data_inicio'] . '</option>';
                        }
                        ?>
                    </select>
        </div>

        <div class="alunoEditarButton">
        <input type="submit" value="Editar aluno">
        </div>
    </form>
    </div>
    </div>
</body>
</html>