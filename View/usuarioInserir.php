<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Cadastro De Usuário</h2>
    <form name="cadUsu" method="POST" action='../Controller/usuarioInserir.php'>
        <label for="name"> Nome: </label>
        <input type="text" name="nome" id="nome" required> <br><br>

        <label for="email"> Email: </label>
        <input type="email" name="email" id="email" required> <br><br>

        <label for="senha"> Senha: </label>
        <input type="password" name="senha" id="senha" required> <br><br>

        <button type="submit"> Cadastrar </button>
</body>
</html>