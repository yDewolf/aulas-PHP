<?php
require_once 'controllers/AlunoController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    AlunoController::salvar($_POST['nome'], $_POST['idade'], $_POST['matricula']);
    header("Location: index.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Alunos</title>
</head>
<body>
    

    <?php 
    if (isset($_GET['form'])) {
        include 'views/form.php';
    } else {
        $alunos = AlunoController::listar();
        include 'views/lista.php';
    }
    ?>
</body>
</html>