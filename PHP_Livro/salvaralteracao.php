<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='style.css'>
    <link rel="icon" href="img/icon.png" type="32">
</head>
<body>
    
    <?php
        // Incluir o arquivo de conexão
        include 'conexao.php';

        // Verificar se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obter os dados do formulário
            $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : null;
            $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
            $autor = isset($_POST['autor']) ? $_POST['autor'] : null;
            $editora = isset($_POST['editora']) ? $_POST['editora'] : null;
            $ano = isset($_POST['ano']) ? $_POST['ano'] : null;

            // Preparar a consulta SQL para atualizar os dados
            $sql = "UPDATE livros SET nome = ?, autor = ?, editora = ?, ano = ? WHERE codigo = ?";

            // Preparar a declaração
            if ($stmt = $conn->prepare($sql)) {
                // Vincular os parâmetros
                $stmt->bindParam(1, $nome);
                $stmt->bindParam(2, $autor);
                $stmt->bindParam(3, $editora);
                $stmt->bindParam(4, $ano);
                $stmt->bindParam(5, $codigo);

                // Executar a declaração
                if ($stmt->execute()) {
                    echo "Registro atualizado com sucesso.";
                } else {
                    echo "Erro ao atualizar o registro: " . $stmt->error;
                }

                // Fechar a declaração
                $stmt = null;
            } else {
                echo "Erro na preparação da declaração: " . $conn->error;
            }

            // Fechar a conexão
            $conn = null;
        } else {
            echo "Método de requisição inválido.";
        }
        ?>
        <br>
        <br>
        <button onclick="location.assign('aposlogin.php')"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
</div>
</body>
</html>