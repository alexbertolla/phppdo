<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author alex
 */
class Aluno {

    private $id;
    private $nome;
    private $nota;

    function inserir(Aluno $aluno, PDO $conn) {
        $alunoBD = new AlunoBD($conn);
        return $alunoBD->inserir($aluno->getNome(), $aluno->getNota());
    }

    function alterar(Aluno $aluno, PDO $conn) {
        $alunoBD = new AlunoBD($conn);
        return $alunoBD->alterar($aluno->getId(), $aluno->getNome(), $aluno->getNota());
    }

    function excluir(Aluno $aluno, PDO $conn) {
        $alunoBD = new AlunoBD($conn);
        return $alunoBD->excluir($aluno->getId());
    }

    function listarAlunos($conn) {
        $alunoBD = new AlunoBD($conn);
        return $alunoBD->listarAlunos();
    }

    function listarTresMaioesNotas($conn) {
        $alunoBD = new AlunoBD($conn);
        return $alunoBD->listarTresMaioesNotas();
    }

    function buscarPorId($id, $conn) {
        $alunoBD = new AlunoBD($conn);
        $aluno = $alunoBD->buscarPorId($id);
        $this->setId($aluno->id);
        $this->setNome($aluno->nome);
        $this->setNota($aluno->nota);
        return $this;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getNota() {
        return $this->nota;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNota($nota) {
        $this->nota = $nota;
    }

}
