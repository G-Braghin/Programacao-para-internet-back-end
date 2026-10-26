<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Simplificado</title>

    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <header class="cabecalho-titulo">
        <h1 class="titulo">Cadastro Simplificado</h1>
    </header>
    <main>
        <form class="formulario" action="cadastrar.php" method="post">
            <label class="labels" for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="inputs">
            <label class="labels" for="email">Email</label>
            <input type="email" name="email" id="email" class="inputs">
            <label class="labels" for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="inputs">
            <button class="botao-submit" type="submit">CADASTRAR</button>
        </form>
    </main>
</body>
</html>