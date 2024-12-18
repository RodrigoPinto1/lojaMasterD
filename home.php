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

$nameProduct = isset($_POST['nameProduct']) ? $_POST['nameProduct'] : '';
$descriptionProduct = isset($_POST['descriptionProduct']) ? $_POST['descriptionProduct'] : '';
$priceProduct = isset($_POST['priceProduct']) ? $_POST['priceProduct'] : '';
$imgProduct = isset($_POST['imgProduct']) ? $_POST['imgProduct'] : '';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

$products = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}

mysqli_close($conn);
