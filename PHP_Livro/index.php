<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='style.css'>
    <title>Lista de Compras</title>
    <script>
        function excluir() {
            if (confirm('Deseja realmente excluir este livro?')) {
                return true;
            } else {
                return false;
            }
        }
        function apagar(codigo){
            event.preventDefault();
            if (windows.confirm("Deseja realmente excluir este livro?")){
                location.href = "excluirlivro.php?id=" + codigo;
            }
        }
    </script>
</head>
<body>
    <div class="conteudo">
        <h1>Catalogo de Livros</h1>
        <a href='incluirlivro.php'><button onclick="location.assign('incluirlivro.php')"><i class="fi fi-rr-add-document"></i> Novo</button></a>
        <br><br>

        <?php
        // Conexão com o banco de dados
        require_once 'conexao.php';

        $stmt = $conn->prepare('SELECT * FROM livros');
        $stmt->execute();
        echo "<table border='1'>";

        foreach ($stmt as $livro) {
            echo "<tr>";
            echo "<td>" . $livro['codigo'] . "</td>";
            echo "<td>" . $livro['nome'] . "</td>";
            echo "<td>" . $livro['autor'] . "</td>";
            echo "<td>" . $livro['editora'] . "</td>";
            echo "<td>" . $livro['ano'] . "</td>";
            echo "<td><a href='alterarlivro.php?id=" . $livro['codigo'] . "'><button><i class='fi fi-rr-edit'></i> Alterar</button></a></td>";
            echo "<td><a href='excluirlivro.php?id=" . $livro['codigo'] . "'><button><i class='fi fi-rr-trash'></i> Excluir</button></a></td>";
            echo "</tr>";
        } 
        echo "</table>";
        $conn = null;
        ?>
    </div>
</html>