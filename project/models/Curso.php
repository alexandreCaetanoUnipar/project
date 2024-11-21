<?php
class Curso {
    private $collection;

    public function __construct() {
        global $database;
        $this->collection = $database->selectCollection('cursos');
    }

    public function cadastrar($dados) {
        $this->collection->insertOne($dados);
    }

    public function listar() {
        return $this->collection->find();
    }
}
?>