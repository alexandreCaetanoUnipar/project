<?php
include_once '../controllers/CursoController.php';
$cursoController = new CursoController();
?>

<form action="" method="post">
    <label>Nome:</label>
    <input type="text" name="nome"><br>

    <label>Descrição:</label>
    <textarea name="descricao"></textarea><br>

    <label>Duração:</label>
    <input type="text" name="duracao"><br>

    <label>Carga Horária:</label>
    <input type="text" name="carga_horaria"><br>

    <input type="submit" value="Cadastrar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cursoController->cadastrar();
}
?>