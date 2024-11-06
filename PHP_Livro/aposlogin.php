<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='style.css'>
    <link rel="icon" href="img/icon.png" type="32">
    <title>Home</title>
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
        <div class="logo">
            <img src="img/livro.png" width="90px" height="auto">
        </div>
         <a href='incluirlivro.php'><button onclick="location.assign('incluirlivro.php')"> Novo Livro</button></a>
        <br><br>

       
            <?php
                require_once 'conexao.php';
                
                
                //Consulta SQL para selecionar todos os livros
                $stmt = $conn->prepare('SELECT * FROM livros');
                $stmt->execute();
                echo "<table>";
                echo "<tr class='tr01'>";
                echo "<th class='codigo'>Código</th>";
                echo "<th class='nome'>Nome</th>";
                echo "<th class='autor'>Autor</th>";
                echo "<th class='editora'>Editora</th>";
                echo "<th class='ano'>Ano</th>";
                echo "</tr>";
                foreach ($stmt as $livro) {
                echo "<tr>";
                echo "<td>" . $livro['codigo'] . "</td> ";
                echo "<td>" . $livro['nome'] . "</td>";
                echo "<td>" . $livro['autor'] . "</td>";
                echo "<td>" . $livro['editora'] . "</td>";
                echo "<td>" . $livro['ano'] . "</td>";
                echo "<td><a href='alterarlivro.php?codigo=" . $livro['codigo'] . "'><button class='alterarlivro.php'><i class='fi fi-rr-edit'></i></button></a></td>";
                echo "<td><a href='excluirlivro.php?codigo=" . $livro['codigo'] . "'><button Class='excluirlivro'><i class='fi fi-rr-trash'></i></button></a></td>";
                echo "</tr>";
                } 
                echo "</table>";
                
                $conn = null;
            ?>
            <br><br>
            <div id='login'>
                <?php
                    if (validalogin()) {
                        echo "  ".$_SESSION['usuario'];
                        echo "&nbsp;<button onclick=\"location.assign('alterarusuario.php')\"><i class=\"fi fi-rr-edit\"></i></button>";
                        echo "  ";
                        echo "<button><a href='logout.php'><i class='fi fi-rr-exit'></i> Sair</a></button>";
                    };
                ?>
            </div>
    
            </table>
    </div>
    <br>    
</body>
</html>