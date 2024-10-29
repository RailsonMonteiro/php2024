<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='style.css'>

    <title>Salva novo livro</title>
</head>
<body>
    <?php
        //abrir conexao com o banco
        require_once 'conexao.php';

        //Executar a inclusão do livro
        try {
            $codigo = $_POST['icodigo'];
            $nome = $_POST['inome'];
            $autor = $_POST['iautor'];
            $editora = $_POST['ieditor'];
            $ano = $_POST['iano'];

            $fmtquery = "INSERT INTO livros (codigo, nome, autor, editora, ano) VALUES ('%d', '%s', '%s', '%s', '%s')";
            
            $query = sprintf($fmtquery,
                $_POST['icodigo'],
                $_POST['inome'],
                $_POST['iautor'],
                $_POST['ieditor'],
                $_POST['iano']);

            $stmt = $conn->prepare($query);
            if ($stmt->execute()) {
                echo "Livros: ".$nome."<br> incluído com sucesso!";
            }
            } catch (PDOException $e) {
                echo "Erro: ".$e->getMessage();
        }
    ?>
    <br>
    <br>
    <button onclick="history.back()"><i class="fi fi-rr-arrow-left"></i> Voltar</button>

</body>
</html>