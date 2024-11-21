<?php
class MatriculaController {
    private $matricula;

    public function __construct() {
        $this->matricula = new Matricula();
    }

    public function cadastrar() {
        $dados = [
            'estudante_id' => $_POST['estudante_id'],
            'curso_id' => $_POST['curso_id']
        ];
        $this->matricula->cadastrar($dados);
        header('Location: index.php');
    }

    public function listar() {
        return $this->matricula->listar();
    }
}
?>