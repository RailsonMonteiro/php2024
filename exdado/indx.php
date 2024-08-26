<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio Dado</title>
</head>
<body>
    <h1>Sortear Dado</h1>
    <form method="GET" action="index.php">
        <button onclick="sortearDado">Sortear</button>
        <br>
    </form>
    <div id="rsorteio">
        <?php
            // Define o caminho para as imagens dos dados
            $images = [
                1 => 'images/dado1.jpg',
                2 => 'images/dado2.jpg',
                3 => 'images/dado3.jpg',
                4 => 'images/dado4.jpg',
                5 => 'images/dado5.jpg',
                6 => 'images/dado6.jpg',
            ];

            // Gera um número aleatório entre 1 e 6
            $sorteio = rand(1, 6);

            // Exibe o número sorteado
            echo "<br>Número sorteado: " . $sorteio . "<br>";

            // Exibe a imagem correspondente ao número sorteado
            echo "<img src='" . $images[$sorteio] . "' alt='Dado sorteado'>";
        ?>

    </div>
</body>
</html>
