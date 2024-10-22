<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Livros</title>
</head>
<body>
    <?php
    require_once ('conect.php');
   ?>

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

        <button type="submit" name="cadastrar">Cadastrar</button>
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
        <?php foreach ($livros as $livro): ?>
        <tr>
            <td><?php echo $livro['codigo']; ?></td>
            <td><?php echo htmlspecialchars($livro['nome']); ?></td>
            <td><?php echo htmlspecialchars($livro['autor']); ?></td>
            <td><?php echo htmlspecialchars($livro['editora']); ?></td>
            <td><?php echo $livro['ano']; ?></td>
        </tr>
        <?php endforeach; ?>
        
    </table>
    <style>
        body {
            flex-direction: column;
            display:flex;
            font-family: Arial, sans-serif; /* Define a fonte padrão da página */
            background-color: #4a4e69; /* Cor de fundo leve */
            padding: 20px; /* Espaçamento interno nas bordas da página */
        }

        h1, h2 {
            text-align: center; /* Centraliza os títulos */
            color: #e5e5e5;
        }

        .container {
            width: 80%; /* Define a largura da área principal em 80% da tela */
            margin: 0 auto; /* Centraliza horizontalmente */
            background-color: #fff; /* Define o fundo branco para contraste */
            padding: 20px; /* Adiciona espaçamento interno */
            border-radius: 8px; /* Arredonda as bordas do container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Adiciona sombra leve */
        }

        form {
            display: flex; /* Organiza os elementos do formulário em flexbox */
            flex-direction: column; /* Define a direção vertical dos campos */
            width: 800px;
            margin: auto;
            
        }

        label {
            margin-bottom: 10px; /* Adiciona espaçamento inferior entre os campos */
            color: #e5e5e5;
        }

        input[type="text"], input[type="number"] {
            padding: 8px; /* Define o espaçamento interno dos campos de texto */
            font-size: 14px; /* Define o tamanho da fonte */
            border: 1px solid #ccc; /* Borda de cor leve */
            border-radius: 4px; /* Arredonda as bordas */
            color: black;
        }

        input[type="submit"] {
            padding: 10px; /* Define o espaçamento interno para o botão */
            font-size: 16px; /* Define o tamanho da fonte do botão */
            color: white; /* Define a cor do texto do botão */
            background-color: #28a745; /* Define a cor de fundo verde para o botão */
            border: none; /* Remove a borda padrão */
            border-radius: 4px; /* Arredonda o botão */
            cursor: pointer; /* Muda o cursor para 'pointer' quando o botão for clicável */
        }

        input[type="submit"]:hover {
            background-color: #218838; /* Muda a cor de fundo quando o botão é sobreposto */
        }

        table {
            width: 800px; /* Define a tabela para ocupar 100% da largura disponível */
            border-collapse: collapse; /* Remove o espaço entre as células */
            margin-top: 20px; /* Espaçamento superior entre a tabela e o formulário */
            margin: auto;
            background-color: #e5e5e5;
        }

        th, td {
            padding: 10px; /* Define o espaçamento interno nas células */
            text-align: left; /* Alinha o texto à esquerda */
            border-bottom: 1px solid #ddd; /* Define uma linha inferior leve entre as células */
            color: #003049;
        }

        th {
            background-color: #f8f8f8; /* Define o fundo para o cabeçalho da tabela */
        }

        .actions a {
            margin-right: 10px; /* Adiciona espaçamento à direita de cada link de ação */
        }

        .search-container {
            text-align: right; /* Alinha o formulário de busca à direita */
            margin-bottom: 20px; /* Espaçamento inferior entre o formulário de busca e o conteúdo */
        }

        .search-container input {
            padding: 6px; /* Define o espaçamento interno do campo de busca */
            border-radius: 4px; /* Arredonda as bordas */
            border: 1px solid #ccc; /* Define a borda leve */
        }
        button{
            text-align:center;
            display: flex;
            width: 100px;
            margin: auto;
        }
    </style>
</body>
</html>
