<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veiculos</title>
</head>
<body>

    <?php
        require_once('veiculos\veiculos.php');
        use veiculos\veiculos;
        use veiculos\carro;
        echo"<h2>Veiculos</h2>";
        $veiculo[] = new veiculos('Fiat','Uno', 2010, 'Branco');
        $veiculo[] = new veiculos('Chevrolet','Celta', 2015, 'Preto');
        $veiculo[] = new veiculos('Ford','Ka', 2018, 'Prata');
        $veiculo[] = new veiculos('Volkswagen','Gol', 2019, 'Vermelho');
        foreach ($veiculo as $v) {
            echo $v->dados();
            echo "<br>";
        }

        echo "<h2>Carros</h2>";
        $carro[] = new carro('Fiat','Uno', 2010, 'Branco', 'ABC-1234', '123456789');
        $carro[] = new carro('Chevrolet','Celta', 2015, 'Preto', 'DEF-5678', '987654321');
        $carro[] = new carro('Ford','Ka', 2018, 'Prata', 'GHI-9101', '123456789');
        $carro[] = new carro('Volkswagen','Gol', 2019, 'Vermelho', 'JKL-1121', '987654321');
        foreach ($carro as $c) {
            echo $c->dados();
            echo "<br>";
        }

        echo "<h2>Moto</h2>";
        $moto[] = new carro('Honda','CG 125', 2010, 'Branco', 'ABC-1234', '123456789');
        $moto[] = new carro('Yamaha','Factor 125', 2015, 'Preto', 'DEF-5678', '987654321');
        $moto[] = new carro('Suzuki','Intruder 250', 2018, 'Prata', 'GHI-9101', '123456789');
        $moto[] = new carro('Kawasaki','Ninja 300', 2019, 'Vermelho', 'JKL-1121', '987654321');
        foreach ($moto as $m) {
            echo $m->dados();
            echo "<br>";
        }
    ?>
    
</body>
</html>