<?php
class EstudanteController {
    private $estudante;

    public function __construct() {
        $this->estudante = new Estudante();
    }

    public function cadastrar() {
        $dados = [
            'nome' => $_POST['nome'],
            'rg' => $_POST['rg'],
            'cpf' => $_POST['cpf'],
            'data_nascimento' => $_POST['data_nascimento'],
            'telefone1' => $_POST['telefone1'],
            'telefone2' => $_POST['telefone2'],
            'nome_mae' => $_POST['nome_mae'],
            'nome_pai' => $_POST['nome_pai'],
            'endereco' => [
                'rua' => $_POST['rua'],
                'numero' => $_POST['numero'],
                'bairro' => $_POST['bairro'],
                'cidade' => $_POST['cidade'],
                'estado' => $_POST['estado']
            ]
        ];
        $this->estudante->cadastrar($dados);
        header('Location: index.php');
    }

    public function listar() {
        return $this->estudante->listar();
    }
}
?>