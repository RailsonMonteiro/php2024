<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalogo livros</title>
</head>
<body>
    <?php
        $db_servidor = 'localhost';
        $db_nome = 'catalogo_livros';
        $db_usuario = 'root';
        $db_senha = '';

        try {
            $conn = new PDO("mysql:host=$db_servidor;dbname=$db_nome", $db_usuario, $db_senha);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexão realizada com sucesso";
        } catch (PDOException $e) {
            //echo "Erro na conexão: " . $e->getMessage();
        }
    ?>
</body>
</html>