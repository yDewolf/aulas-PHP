<?php include 'views/header.php'; ?>
<h2>Cadastro de Aluno</h2>
<form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Idade:</label>
        <input type="number" name="idade" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Matrícula:</label>
        <input type="text" name="matricula" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>
<?php include 'views/footer.php'; ?>