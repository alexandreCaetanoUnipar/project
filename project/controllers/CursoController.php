<?php
class CursoController {
private $curso;

public function __construct() {
    $this->curso = new Curso();
}

public function cadastrar() {
    $dados = [
        'nome' => $_POST['nome'],
        'descricao' => $_POST['descricao'],
        'duracao' => $_POST['duracao'],
        'carga_horaria' => $_POST['carga_horaria']
    ];
    $this->curso->cadastrar($dados);
    header('Location: index.php');
}

public function listar() {
    return $this->curso->listar();
}

}
?>