<?php
include_once '../controllers/CursoController.php';
$cursoController = new CursoController();
$cursos = $cursoController->listar();
?>

<h1>Lista de Cursos</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Duração</th>
        <th>Carga Horária</th>
    </tr>

    <?php foreach ($cursos as $curso) { ?>
    <tr>
        <td><?php echo $curso['_id']; ?></td>
        <td><?php echo $curso['nome']; ?></td>
        <td><?php echo $curso['descricao']; ?></td>
        <td><?php echo $curso['duracao']; ?></td>
        <td><?php echo $curso['carga_horaria']; ?></td>
    </tr>
    <?php } ?>
</table>