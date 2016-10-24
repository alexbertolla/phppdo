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

    private static $conn;

    public function __construct(PDO $conn) {
        self::$conn = $conn;
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

}
