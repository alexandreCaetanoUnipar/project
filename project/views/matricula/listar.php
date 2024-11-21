<?php
include_once '../controllers/MatriculaController.php';
$matriculaController = new MatriculaController();
$estudanteController = new EstudanteController();
$cursoController = new CursoController();

$matriculas = $matriculaController->listar();
?>

<h1>Lista de Matrículas</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Estudante</th>
        <th>Curso</th>
    </tr>

    <?php foreach ($matriculas as $matricula) { 
        $estudante = $estudanteController->buscar($matricula['estudante_id']);
        $curso = $cursoController->buscar($matricula['curso_id']);
    ?>
    <tr>
        <td><?php echo $matricula['_id']; ?></td>
        <td><?php echo $estudante['nome']; ?></td>
        <td><?php echo $curso['nome']; ?></td>
    </tr>
    <?php } ?>
</table>