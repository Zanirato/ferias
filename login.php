
<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Valida se o usuário já existe
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $error = "Usuário já cadastrado.";
    } else {
        // Insere o novo usuário
        $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['usuarios'] = $nome;
            header('Location: index.php'); // Redireciona após cadastro
            exit();
        } else {
            $error = "Erro ao cadastrar usuário: " . $conn->error;
        }
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
        <form action="" method="POST">
            <label>Nome do Usuário:</label>
            <input type="text" name="nome" placeholder="Insira nome do usuário" required>
            <br>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Insira o email" required>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
        <?php
        if (isset($error)) {
            echo "<p style='color: red;'>$error</p>";
        }   
        ?>
    </body>
</html>