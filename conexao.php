<?php

$servername = "localhost:3309";
$username = "root";
$password = "";
$dbname = "login";

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        throw new Excepcion("Falha na conexão: " . $conn->connect_error);
    }
    echo "Conexão realizado com sucesso!";
} catch (Excepcion $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>