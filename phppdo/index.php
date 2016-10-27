<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './ConexaoBD.php';
        include_once './Aluno.php';
        include_once './AlunoBD.php';
        try {


            $conn = ConexaoBD::conectarBD();
            $aluno1 = new Aluno();
            $aluno1->setNome('Alex Bertolla');
            $aluno1->setNota(9);

            if ($aluno1->inserir($aluno1, $conn)) {
                echo '<br>aluno: ' . $aluno1->getNome() . ' inserido com sucesso!';
            } else {
                echo '<br>erro ao inserir aluno: ' . $aluno1->getNome();
            }

            $aluno2 = new Aluno();
            $aluno2 = $aluno2->buscarPorId(1, $conn);
            $aluno2->setNome('Ivo');
            if ($aluno2->alterar($aluno2, $conn)) {
                echo '<br>Aluno ' . $aluno2->getNome() . ' alterado com sucesso!';
            } else {
                echo '<br>Erro ao alterar aluno ' . $aluno2->getNome();
            }

            $aluno3 = new Aluno();
            $aluno3->setId(4);
            if ($aluno3->excluir($aluno3, $conn)) {
                echo '<br>Aluno ' . $aluno3->getNome() . ' excluido com sucesso!';
            } else {
                echo '<br>Erro ao excluir aluno ' . $aluno3->getNome();
            }


            $aluno = new Aluno();
            $listaMaioresNotas = $aluno->listarTresMaioesNotas($conn);

            foreach ($listaMaioresNotas as $alunos) {
                echo '<br>';
                echo 'Nome: ' . $alunos->nome . '<br>';
                echo 'Nota: ' . $alunos->nota . '<br>';
            }
            
            
            $listaAlunos = $aluno->listarAlunos($conn);

            foreach ($listaAlunos as $alunos) {
                echo 'Nome: ' . $alunos->nome . '<br>';
                echo 'Nota: ' . $alunos->nota . '<br>';
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        ?>
    </body>
</html>
