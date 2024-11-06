<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>  
    <link rel='stylesheet' href='style.css'>
    <link rel="icon" href="img/icon.png" type="32">

    <title>Login</title>
</head>
<body>
    <div class="conteudo">
        <div class="logo">
            <img src="img/usuario.png" width="90px" height="auto">
        </div>
        <button onclick="location.assign('incluirusuario.php')" class="novousuario"><i class="fi fi-rr-user-add"></i> Novo Usuário</button>
        <br>
        <br>
        <form action="efetuarlogin.php" method="post">

            <label for="iusuario">Usuário:</label>
            <input type="text" name="iusuario" id="iusuario" placeholder="Informe o usuário" size="40">
            <br>
            <label for="isenha">Senha:</label>
            <input type="password" name="isenha" id="isenha" placeholder="Informe a senha" size="40">
            <br>
            <br>
            <div class="botoes">
                <button type="submit" name="bsubmit" id="bsubmit">Entrar</button>
                <button type="reset" name="breset" id="breset">Cancelar</button>
            </div>
        </form>
        <br>
        <button onclick="location.assign('index.php')"><i class="fi fi-rr-arrow-left"></i> Voltar</button>
    </div>    
</body>
</html>

