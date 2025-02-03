<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

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

$userId = isset($_GET['id']) ? $_GET['id'] : '';

if ($userId) {
    $sql = "SELECT * FROM users WHERE id='$userId'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "Usuário não encontrado.";
        exit();
    }
} else {
    echo "ID do usuário não fornecido.";
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/users.css">
    <script src="https://kit.fontawesome.com/85191b6578.js" crossorigin="anonymous"></script>
    <title>Eliminar Utilizador</title>
</head>

<body>
    <header>
        <h1>Eliminar Utilizador</h1>
        <nav>
            <ul>
                <li><a href="homePage.php">Home</a></li>
                <li><a href="usersPage.php">Users</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="delete-user">
            <h2>Eliminar Utilizador</h2>
            <p>Tem certeza que deseja eliminar o utilizador <strong><?php echo htmlspecialchars($user['username']); ?></strong>?</p>
            <form action="deleteUser.php" method="POST">
                <input type="hidden" id="userId" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
                <button type="submit" class="btn-submit">Eliminar Utilizador</button>
                <a href="usersPage.php" class="btn-cancel">Cancelar</a>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Loja Online. Todos os direitos reservados.</p>
    </footer>
</body>

</html>