<?php
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

$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$role = isset($_POST['role']) ? $_POST['role'] : '';

// Define o valor de role
if ($role == '1') {
    $role = 'admin';
} else {
    $role = 'user';
}

// Cria um novo utilizador
if ($username && $email && $password && $role) {
    // Hash da senha para segurança
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$hashed_password', '$role')";
    if (mysqli_query($conn, $sql)) {
        echo "Novo utilizador adicionado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Todos os campos são obrigatórios!";
}

mysqli_close($conn);

// Redireciona de volta para a página de usuários
header("Location: usersPage.php");
exit();
