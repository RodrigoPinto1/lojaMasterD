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

$nameProduct = isset($_POST['nameProduct']) ? $_POST['nameProduct'] : '';
$descriptionProduct = isset($_POST['descriptionProduct']) ? $_POST['descriptionProduct'] : '';
$priceProduct = isset($_POST['priceProduct']) ? $_POST['priceProduct'] : '';
$imgProduct = isset($_POST['imgProduct']) ? $_POST['imgProduct'] : '';

$_SESSION['nameProduct'] = $nameProduct;
$_SESSION['descriptionProduct'] = $descriptionProduct;
$_SESSION['priceProduct'] = $priceProduct;
$_SESSION['imgProduct'] = $imgProduct;

$sql = "SELECT * FROM products WHERE nameProduct = '$nameProduct' AND descriptionProduct = '$descriptionProduct' AND priceProduct = '$priceProduct' AND imgProduct = '$imgProduct'";
$result = mysqli_query($conn, $sql);
