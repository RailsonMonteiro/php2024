<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo do uso do include</title>
</head>
<body>
    <?php
    error_reporting(0); // não reporta o alerta de erro.
        echo "A $cor $fruta";
        include "var.php";
        echo "$fruta e $cor <br>";
    ?>
    
</body>
</html>