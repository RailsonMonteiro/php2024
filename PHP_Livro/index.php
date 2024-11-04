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
            event.preventdefault();
            window.location = "excluirlivro.php";
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
         <a href='login.php'><button onclick="location.assign('login.php')"><i class="fi fi-rr-layer-plus"></i> Novo</button></a>
         
        <br><br>
        <form action="index.php" method="GET">
            <input type="text" name="ibusca" id="ibusca" placeholder="Pesquisar livro" size="50">
            <button type="submit"><i class="fi fi-rr-search"></i></button>
            <br>
            <br>
            <br>
            <?php
                require_once 'conexao.php';
            
            // Consulta SQL para selecionar todos os livros
                $stmt = $conn->prepare('SELECT * FROM livros');
                $stmt->execute();
                echo "<table>";
                echo "<tr class='tr01'>";
                echo "<th>Código</th>";
                echo "<th>Nome</th>";
                echo "<th>Autor</th>";
                echo "<th>Editora</th>";
                echo "<th>Ano</th>";
                echo "</tr>";
                foreach ($stmt as $livro) {
                echo "<tr>";
                echo "<td>" . $livro['codigo'] . "</td> ";
                echo "<td>" . $livro['nome'] . "</td>";
                echo "<td>" . $livro['autor'] . "</td>";
                echo "<td>" . $livro['editora'] . "</td>";
                echo "<td>" . $livro['ano'] . "</td>";
                echo "</tr>";
                } 
                echo "</table>";
                
                $conn = null;
            ?>
    
            </table>
        </form>
    </div>
    <br>    
</body>
</html>