<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='style.css'>

    <title>Lista de livros - Incluir Livros</title>
</head>
<body>
    <div class="conteudo">
        <h1>Livros - Salvando Livro</h1>
        <?php 
            require_once('conexao.php');   
                if (isset($_POST["icodigo"])) {
                    if ($_POST["icodigo"] != "") {
                        try {
                            $sql = "INSERT INTO livros (codigo, nome, autor, editora, ano) VALUES (:codigo, :nome, :autor, :editora, :ano)";
                            $stmt = $conn->prepare($sql);
                            $stmt->bindParam(':codigo', $_POST["icodigo"]);
                            $stmt->bindParam(':nome', $_POST["inome"]);
                            $stmt->bindParam(':autor', $_POST["iautor"]);
                            $stmt->bindParam(':editora', $_POST["ieditora"]);
                            $stmt->bindParam(':ano', $_POST["iano"]);
                            if ($stmt->execute()) {
                                echo "livros: ".$_POST["icodigo"]."<br>Incluída com sucesso";
                            }
                        } catch (PDOException $e) {
                            echo "Erro ao Inserir a Lista <br>".$e->getMessage(); 
                        }
                    } else {
                        echo "Erro ao Incluir! Nome da lista deve ser informado";
                    }
                } else {
                    echo "Erro ao chamar rotina para Incluir Lista";
                }
        ?>
        <br>
        <br>
        <button onclick="location.assign('index.php')"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>
</body>
</html>