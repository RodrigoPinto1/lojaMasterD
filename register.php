<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lojamasterd';
$conn = @mysqli_connect($hostname, $username, $password, $dbname);

/*
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
*/

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
$result = mysqli_query($conn, $sql);

header('Location: index.php');
