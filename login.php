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

$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND role = 'admin'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$role = $row['role'];

//var_dump($role);

if ($role == 'admin') {
    header("Location: adminPage.php");
} else {
    header("Location: homePage.php");
}
