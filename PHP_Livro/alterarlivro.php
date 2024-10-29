<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='style.css'>

    <title>Alterar Livros</title>
</head>
<body>

    <?php
        require_once "conexao.php";
        try {
            $stmt = $conn->prepare("SELECT * FROM livros WHERE codigo = :codigo");
            $stmt->bindParam(':codigo', $_GET["codigo"], PDO::PARAM_INT);
            $stmt->execute();
            $livros = $stmt->fetch(PDO::FETCH_ASSOC);
            $conn = null;
        } catch(PDOException $e) {
            echo "<pre>";
            echo "Aconteceu um erro: ". $e->getMessage();
            echo "</pre>";
        }
    ?>
   
    <div class="conteudo">
        <h1>Alterar dados do livro</h1>
        <form action="salvaralteracao.php" method="post">
            <label for="icodigo">Código:</label>
            <input type="number" name="icodigo" id="icodigo" placeholder="Informe o código do livro" size="80">
            <br>
            <label for="inome">Nome:</label>
            <input type="text" name="inome" id="inome" placeholder="Informe o nome deste livro" size="80">
            <br>
            <label for="iautor">Autor:</label>
            <input type="text" name="iautor" id="iautor" placeholder="Informe o nome do autor do livro" size="80">
            <br>
            <label for="ieditor">Editora:</label>
            <input type="text" name="ieditor" id="ieditor" placeholder="Informe o nome da editora do livro" size="80">
            <br>
            <label for="iano">Ano:</label>
            <input type="number" name="iano" id="iano" placeholder="Informe o ano de puplicação do livro" size="80">
            <br><br>
            <button type="submit" name="salvar" id="submit">Salvar</button>
            <button type="reset" name="breset" id="breset">Cancelar</button>
        </form>
        <br>
        <button onclick="history.back()"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>    
</body>
</html>