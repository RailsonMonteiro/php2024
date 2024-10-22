<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <h1>Catálogo de Livros</h1>

    <h2>Cadastrar Novo Livro</h2>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" required>
        <br><br>

        <label for="editora">Editora:</label>
        <input type="text" name="editora" required>
        <br><br>

        <label for="ano">Ano:</label>
        <input type="number" name="ano" required>
        <br><br>

        <button onclick="location.assign('incluirlista.php')"><i class="fi fi-rr-add-document"></i> Novo</button>
    </form>

    <h2>Livros Cadastrados</h2>
    <table border="1">
        <tr>
            <th id="codigo">Código</th>
            <th id="nome">Nome</th>
            <th id="nome">Autor</th>
            <th id="nome">Editora</th>
            <th id="ano">Ano</th>
        </tr>
    </table>

    <?php
    require_once ('conect.php');
   ?>
   
</body>
</html>