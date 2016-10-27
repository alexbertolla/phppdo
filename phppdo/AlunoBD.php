<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlunoBD
 *
 * @author alex
 */
class AlunoBD {

    private static $conn;

    public function __construct(PDO $conn) {
        self::$conn = $conn;
    }

    function buscarPorId($id) {
        $query = 'SELECT * FROM phppdo.alunos WHERE id=:id';
        $stm = self::$conn->prepare($query);
        $stm->bindParam('id', $id);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_OBJ);
    }

    function listarAlunos() {
        $query = 'SELECT * FROM phppdo.alunos ORDER BY nome ASC';
        $stm = self::$conn->prepare($query);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    function listarTresMaioesNotas() {
        $query = 'SELECT * FROM phppdo.alunos ORDER BY nota DESC LIMIT 3';
        $stm = self::$conn->prepare($query);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    function inserir($nome, $nota) {
        $query = 'INSERT INTO alunos (nome, nota) '
                . ' VALUES (:nome, :nota);';
        $stm = self::$conn->prepare($query);
        $stm->bindParam('nome', $nome);
        $stm->bindParam('nota', $nota);
        return $stm->execute();
    }

    function alterar($id, $nome, $nota) {
        $query = 'UPDATE alunos set nome=:nome,'
                . ' nota=:nota '
                . 'WHERE id=:id;';
        $stm = self::$conn->prepare($query);
        $stm->bindParam('id', $id);
        $stm->bindParam('nome', $nome);
        $stm->bindParam('nota', $nota);
        return $stm->execute();
    }

    function excluir($id) {
        $query = 'DELETE FROM alunos WHERE id=:id ';
        $stm = self::$conn->prepare($query);
        $stm->bindParam('id', $id);
        return $stm->execute();
    }

}
