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

$nameProduct = isset($_POST['name']) ? $_POST['name'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$stock = isset($_POST['stock']) ? $_POST['stock'] : '';

$_SESSION['name'] = $nameProduct;
$_SESSION['description'] = $description;
$_SESSION['price'] = $price;
$_SESSION['stock'] = $stock;

$sql = "SELECT * FROM products WHERE name = '$nameProduct' AND description = '$description' AND price = '$price' AND stock = '$stock'";
$result = mysqli_query($conn, $sql);
