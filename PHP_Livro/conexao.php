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

        require_once('seguranca.php');

        try {
           $conn = new PDO("mysql:host=$db_servidor;dbname=$db_nome",$db_usuario,$db_senha);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (PDOException $e) {
           echo "Erro ao conectar no Banco de Dados <br>".$e->getMessage(); 
           exit(1);
        }       
    ?>    
</body>
</html>