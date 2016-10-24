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
        $conn = ConexaoBD::conectarBD();
        $alunos = new Aluno($conn);
        $listaMaioresNotas = $alunos->listarTresMaioesNotas();

        foreach ($listaMaioresNotas as $alunos) {
            echo 'Nome: ' . $alunos->nome . '<br>';
            echo 'Nota: ' . $alunos->nota . '<br>';
        }
        
        $listaAlunos = $alunos->listarAlunos();

        foreach ($listaAlunos as $alunos) {
            echo 'Nome: ' . $alunos->nome . '<br>';
            echo 'Nota: ' . $alunos->nota . '<br>';
        }
        ?>
    </body>
</html>
