<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortear Dado</title>
</head>
<body>
    <h1>    Sortear Dado</h1>

    <form method="POST" action="index.php">
        <button onclik="sortearDado" type="submit">Sortear</button>
        <br>
    </form>
    <div id="rsorteado">
        <?php
            function sortearDado() {
                $resultado = rand(1, 6);
        
                
                if ($resultado == 1) {
                    return "<br>Número sorteado 1!<br><img src='images/dado1.jpg'>";
                } elseif ($resultado == 2) {
                    return "<br>Número sorteado 2!<br><img src='images/dado2.jpg'>";
                } elseif ($resultado == 3) {
                    return "<br>Número sorteado 3!<br><img src='images/dado3.jpg'>";
                } elseif ($resultado == 4) {
                    return "<br>Número sorteado 4!<br><img src='images/dado4.jpg'>";
                } elseif ($resultado == 5) {
                    return "<br>Número sorteado 5!<br><img src='images/dado5.jpg'>";
                } elseif ($resultado == 6) {
                    return "<br>Número sorteado 6!<br><img src='images/dado6.jpg'>";
                } else {
                    return "Erro: valor fora do intervalo esperado.";
                }
            }
            echo sortearDado();
        ?>
        
    </div>
</body>
</html>