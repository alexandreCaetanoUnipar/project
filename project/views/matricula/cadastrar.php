<?php
include_once '../controllers/MatriculaController.php';
$matriculaController = new MatriculaController();
$estudanteController = new EstudanteController();
$cursoController = new CursoController();

$estudantes = $estudanteController->listar();
$cursos = $cursoController->listar();
?>

<form action="" method="post">
    <label>Estudante:</label>
    <select name="estudante_id">
        <?php foreach ($estudantes as $estudante) { ?>
            <option value="<?php echo $estudante['_id']; ?>"><?php echo $estudante['nome']; ?></option>
        <?php } ?>
    </select><br>

    <label>Curso:</label>
    <select name="curso_id">
        <?php foreach ($cursos as $curso) { ?>
            <option value="<?php echo $curso['_id']; ?>"><?php echo $curso['nome']; ?></option>
        <?php } ?>
    </select><br>

    <input type="submit" value="Matricular">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $matriculaController->cadastrar();
}
?>