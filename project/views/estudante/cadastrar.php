<?php
include_once '../controllers/EstudanteController.php';
$estudanteController = new EstudanteController();
?>

<form action="" method="post">
    <label>Nome:</label>
    <input type="text" name="nome"><br>

    <label>RG:</label>
    <input type="text" name="rg"><br>

    <label>CPF:</label>
    <input type="text" name="cpf"><br>

    <label>Data de Nascimento:</label>
    <input type="date" name="data_nascimento"><br>

    <label>Telefone 1:</label>
    <input type="text" name="telefone1"><br>

    <label>Telefone 2:</label>
    <input type="text" name="telefone2"><br>

    <label>Nome da Mãe:</label>
    <input type="text" name="nome_mae"><br>

    <label>Nome do Pai:</label>
    <input type="text" name="nome_pai"><br>

    <label>Endereço:</label><br>
    <label>Rua:</label>
    <input type="text" name="rua"><br>
    <label>Número:</label>
    <input type="text" name="numero"><br>
    <label>Bairro:</label>
    <input type="text" name="bairro"><br>
    <label>Cidade:</label>
    <input type="text" name="cidade"><br>
    <label>Estado:</label>
    <input type="text" name="estado"><br>

    <input type="submit" value="Cadastrar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $estudanteController->cadastrar();
}
?>