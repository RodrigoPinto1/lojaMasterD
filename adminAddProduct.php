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

// Obtém os dados do formulário
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];

// Insere o novo produto no banco de dados
$sql = "INSERT INTO products (name, description, price, stock) VALUES ('$name', '$description', '$price', '$stock')";

if (mysqli_query($conn, $sql)) {
    echo "Produto adicionado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

// Redireciona de volta para a página de administração
header("Location: adminPage.php");
exit();
