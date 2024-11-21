<?php
include_once '../controllers/EstudanteController.php';
$estudanteController = new EstudanteController();
$estudantes = $estudanteController->listar();
?>

<h1>Lista de Estudantes</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>RG</th>
        <th>CPF</th>
        <th>Data de Nascimento</th>
        <th>Telefone 1</th>
        <th>Telefone 2</th>
        <th>Nome da Mãe</th>
        <th>Nome do Pai</th>
        <th>Endereço</th>
    </tr>

    <?php foreach ($estudantes as $estudante) { ?>
    <tr>
        <td><?php echo $estudante['_id']; ?></td>
        <td><?php echo $estudante['nome']; ?></td>
        <td><?php echo $estudante['rg']; ?></td>
        <td><?php echo $estudante['cpf']; ?></td>
        <td><?php echo $estudante['data_nascimento']; ?></td>
        <td><?php echo $estudante['telefone1']; ?></td>
        <td><?php echo $estudante['telefone2']; ?></td>
        <td><?php echo $estudante['nome_mae']; ?></td>
        <td><?php echo $estudante['nome_pai']; ?></td>
        <td><?php echo $estudante['endereco']['rua'] . ', ' . $estudante['endereco']['numero'] . ' - ' . $estudante['endereco']['bairro'] . ', ' . $estudante['endereco']['cidade'] . '/' . $estudante['endereco']['estado']; ?></td>
    </tr>
    <?php } ?>
</table>