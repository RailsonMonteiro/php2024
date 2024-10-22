<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexao livros</title>
</head>
<body>
    <?php
       // Configurações do banco de dados
    $host = 'localhost'; // ou o endereço do seu servidor
    $db = 'catalogo_Livros'; // nome do banco de dados
    $user = 'root'; // seu usuário do banco
    $pass = ''; // sua senha do banco

    try {
        // Conexão com o banco de dados
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro de conexão: " . $e->getMessage();
    }

    // Cadastrar novo livro
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $autor = $_POST['autor'];
        $editora = $_POST['editora'];
        $ano = $_POST['ano'];

        $stmt = $pdo->prepare("INSERT INTO livros (nome, autor, editora, ano) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $autor, $editora, $ano]);
    }
    // Listar livros
    $stmt = $pdo->query("SELECT * FROM livros");
    $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>    
    
</body>
</html>

