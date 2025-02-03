<?php
session_start();

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

// Obtém os dados do produto enviado pelo JavaScript
$data = json_decode(file_get_contents('php://input'), true);
$productId = isset($data['id']) ? $data['id'] : '';

// Verifica se o produto existe no banco de dados
$sql = "SELECT * FROM products WHERE id='$productId'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);

    // Adiciona o produto ao carrinho na sessão
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$productId] = [
            'name' => $product['name'],
            'description' => $product['description'],
            'price' => $product['price'],
            'quantity' => 1
        ];
    }

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Produto não encontrado']);
}

mysqli_close($conn);
?>