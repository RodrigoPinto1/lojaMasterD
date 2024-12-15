<?php
session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lojamasterd';
$conn = @mysqli_connect($hostname, $username, $password, $dbname);

/*
// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
*/

$name = $_POST['name'];
$password = $_POST['password'];

$_SESSION['name'] = $name;
$_SESSION['password'] = $password;

$sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
$result = mysqli_query($conn, $sql);

header("Location: homePage.php");
