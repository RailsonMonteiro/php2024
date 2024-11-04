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
        if (!validalogin()) {
            header("Location: login.php");
        }    
        if (isset($_GET['livros'])) {
            try {
                $sql = "select * 
                         from livros 
                         where codigo = %d 
                           and nome = '%d'";
    
                $query = sprintf($sql,$_GET['livros'],$_SESSION['usuario']);
                //echo $query;
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $lista = $stmt->fetch(PDO::FETCH_ASSOC);
                //print_r($item);
            } catch (PDOException $e) {
                echo "Erro ao consultar item no Banco de Dados <br>".$e->getMessage(); 
            }
        }
    ?>
    <div class="conteudo">
        <form action="salvaralteracao.php" method="post">
            <h1>Alterar Livro - <?=$lista['codigo']?></h1>
            <label for="icodigo">Código:</label>
            <input type="number" name="icodigo" id="icodigo" size="80" value="<?=$lista['codigo']?>">
            <br>
            <label for="inome">Nome:</label>
            <input type="text" name="inome" id="inome" size="80" value="<?=$lista['nome']?>">
            <br>
            <label for="iautor">Autor:</label>
            <input type="text" name="iautor" id="iautor" size="80">
            <br>
            <label for="ieditora">Editora:</label>
            <input type="text" name="ieditora" id="ieditora" size="80">
            <br>
            <label for="iano">Ano:</label>
            <input type="number" name="iano" id="iano" size="80">
            <br><br>
            <button type="submit" name="salvar" id="submit">Salvar</button>
            <button type="reset" name="breset" id="breset">Cancelar</button>
        </form>
        <br>
        <button onclick="history.back()"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>    
</body>
</html>
