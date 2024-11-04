<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir livro</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <?php
        require_once('conexao.php');
        
        try {
            //apagar dados do livro
            if (!isset($_GET['codigo'])) {
                throw new Exception('Código do livro não fornecido.');
            }
            $parametro = ['codigo' => $_GET['codigo']];
            $stmt = $conn -> prepare('DELETE FROM livros WHERE codigo = :codigo');
            if ($stmt -> execute($parametro)) {
                echo 'Livro excluído com sucesso!';
            };

            //exibir voltar
            echo "<br>";
            echo "<button onclick='history.back()'><i class='fi fi-rr-arrow-left'></i> Voltar</button>";
        }catch(PDOException $e) {
            echo "<pre>";
            echo 'Erro ao executar ' . $e -> getMessage();
            echo "</pre>";
        }
    ?>
</body>
</html>


