<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='style.css'>
    <title>Lista de Compras</title>
</head>
<body>
    <div class="conteudo">
        <h1>Catalogo de Livros</h1>
        <a href='incluirlivro.php'><button onclick="location.assign('incluirlivro.php')"><i class="fi fi-rr-add-document"></i> Novo</button></a>
        <br>

        <?php
        // Conexão com o banco de dados
        require_once 'conexao.php';
        ?>
    </div>
</html>