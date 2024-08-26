<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do IMC</title>
</head>
<body>
    <h1>Cáculo do IMC</h1>
    <form action="#" method="POST">
        <label for="inome">Nome:</label>
        <input name="inome" id="inome" size="30">
        <br><br>
        <label for="iidade">Idade:</label>
        <input name="iidade" id="iidade" size="2">
        <br><br>
        <label for="ialtura">Altura:</label>
        <input name="ialtura" id="ialtura" size="3"><small>(em m)</small>
        <br><br>
        <label for="ipeso">Peso:</label>
        <input name="ipeso" id="ipeso" size="5"><small>(em kg)</small>
        <br>
        <br>
        <button name="bcacular">Calcular IMC</button>
    </form>
    <?php
    if ($_POST) {
        $imc = ($_POST["ipeso"] / ($_POST["ialtura"] * $_POST["ialtura"]));
        echo $_POST["inome"]." seu IMC é ".$imc;
        echo "<br>";
        if ($imc < 18.5) { 
            echo "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "Peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "Pré-obsidade";
        } elseif ($imc >= 30 && $imc < 35) {
            echo "Obesidade Grau 1";
        } elseif ($imc >= 35 && $imc < 40) {
            echo "Obesidade Grau 2";
        } else {
            echo "Obesidade Grau 3";
        }
    }
    ?>
</body>
</html>