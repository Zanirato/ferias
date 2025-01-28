<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Férias</title>
</head>
<body>
<h1>Gerenciamento de Usuário</h1>
    <form action="store.php" method="POST">
        <label>Nome do Usuário:</label>
        <input type="text" name="nome" placeholder="Insira nome do usuário" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>

