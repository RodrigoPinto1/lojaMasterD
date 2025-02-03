<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Conexão com o banco de dados
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lojamasterd';
$conn = @mysqli_connect($hostname, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$id = isset($_POST['id']) ? $_POST['id'] : '';

if ($id) {
    $sql = "DELETE FROM users WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Utilizador eliminado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "ID do utilizador não fornecido!";
}

mysqli_close($conn);

// Redireciona de volta para a página de usuários
header("Location: usersPage.php");
exit();
