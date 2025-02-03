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

$id = isset($_GET['id']) ? $_GET['id'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$role = isset($_POST['role']) ? $_POST['role'] : '';

// Consulta para buscar todos os usuários
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$users = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

mysqli_close($conn);

// Gera o arquivo JSON com os dados dos usuários
file_put_contents('response.json', json_encode($users, JSON_PRETTY_PRINT));

//echo "Arquivo JSON gerado com sucesso!";
