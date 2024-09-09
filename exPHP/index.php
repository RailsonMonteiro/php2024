<!-- 1. Entre com os dados de 10 alunos de uma classe, recebendo as informações 
como nome e  uma nota do aluno. Armazene estes dados em um vetor.  Ao final do
 programa mostrar a média de nota da classe, e o nome do aluno que obteve maior nota. -->

 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <h1>Cadastro de Alunos</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Inicializa o array para armazenar os dados dos alunos
        $alunos = [];

        // Coleta os dados dos alunos
        for ($i = 1; $i <= 10; $i++) {
            $nome = $_POST["nome$i"];
            $nota = (float) $_POST["nota$i"];
            $alunos[] = ['nome' => $nome, 'nota' => $nota];
        }

        // Calcula a média das notas
        $somaNotas = 0;
        $maiorNota = PHP_FLOAT_MIN;
        $alunoMaiorNota = '';

        foreach ($alunos as $aluno) {
            $somaNotas += $aluno['nota'];
            
            if ($aluno['nota'] > $maiorNota) {
                $maiorNota = $aluno['nota'];
                $alunoMaiorNota = $aluno['nome'];
            }
        }

        $mediaNotas = $somaNotas / count($alunos);

        // Mostra os resultados
        echo "<h2>Resultados</h2>";
        echo "Média das notas da classe: " . number_format($mediaNotas, 2) . "<br>";
        echo "Aluno com a maior nota: " . $alunoMaiorNota . " com a nota " . number_format($maiorNota, 2) . "<br>";
    } else {
    ?>
    
    <form action="index.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <fieldset>
                <legend>Aluno <?= $i ?></legend>
                <label for="nome<?= $i ?>">Nome:</label>
                <input type="text" id="nome<?= $i ?>" name="nome<?= $i ?>" required><br><br>
                <label for="nota<?= $i ?>">Nota:</label>
                <input type="number" id="nota<?= $i ?>" name="nota<?= $i ?>" step="0.01" min="0" max="10" required>
            </fieldset>
            <br>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php
    }
    ?>
</body>
</html>

