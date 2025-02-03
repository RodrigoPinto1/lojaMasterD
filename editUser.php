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

$id = isset($_POST['id']) ? $_POST['id'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$role = isset($_POST['role']) ? $_POST['role'] : '';

if ($id && $username && $email && $role) {
    $sql = "UPDATE users SET username='$username', email='$email', role='$role' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Utilizador atualizado com sucesso!";
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
