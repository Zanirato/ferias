<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = md5($_POST['email']);

    $sql = "SELECT * FROM usuarios WHERE nome='$nome' AND email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuarios'] = $usuarios;
        header('Location: index.php');
    } else {
        $error = "Usuário não encontrado ou email inválido.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Férias</title>
</head>
<body>
<h1>Gerenciamento de Usuário</h1>
    <form action="store.php" method="POST">
        <label>Nome do Usuário:</label>
        <input type="text" name="nome" placeholder="Insira nome do usuário" required>
        <br>
        <label>Email:</label>
        <input type="email" id="email" placeholder="Insira o email" required>
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>

