<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='style.css'>
    <link rel="icon" href="img/icon.png" type="32">

    <title>Usuário</title>
</head>
<body>

    <?php
        require_once('conexao.php');
    ?>


    <div class="conteudo">
        <div class="logo">
            <img src="img/editarusuario.png" width="90px" height="auto">
        </div>    
        <h1><?=$_SESSION['usuario']?></h1>
        <form action="salvaralteracaousuario.php" method="post">
            <label for="isenha">Senha:</label>
            <input type="password" name="isenha" id="isenha" size="20">
            <br>
            <button type="submit" name="bsubmit" id="bsubmit">Salvar</button>
            <button type="reset" name="breset" id="breset">Cancelar</button>
        </form>
        <br>
        <button onclick="history.back()"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>
</body>
</html>