<?php
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

$name = isset($_POST['name']) ? $_POST['name'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$stock = isset($_POST['stock']) ? $_POST['stock'] : '';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

$products = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}

mysqli_close($conn);
