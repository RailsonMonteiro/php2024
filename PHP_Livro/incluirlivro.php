<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='style.css'>
    <link rel="icon" href="img/icon.png" type="32">

    <title>Livros</title>
</head>
<body>
   
    <div class="conteudo">
        <div class="logo">
            <img src="img/novolivro.png" width="90px" height="auto">
        </div>
        <form action="salvarlivro.php" method="post">
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
            <button type="submit" name="bsubmit" id="bsubmit">Salvar</button>
            <button type="reset" name="breset" id="breset">Cancelar</button>
        </form>
        <br>
        <button onclick="history.back()"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>    
</body>
</html>