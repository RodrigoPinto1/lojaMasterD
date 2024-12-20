<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminAddProduct.css">
    <script src="https://kit.fontawesome.com/85191b6578.js" crossorigin="anonymous"></script>
    <script src="js/home.js" defer></script>
    <title>Admin Page</title>
</head>

<body>
    <header>
        <h1>Bem-vindo à Loja Online</h1>
        <nav>
            <ul>
                <li><a href="adminPage.php">Home</a></li>
                <li><a href="usersPage.php">Users</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="add-product">
            <h2>Adicionar Novo Produto</h2>
            <form action="adminAddProduct.php" method="POST">
                <div class="form-group">
                    <label for="name">Nome do Produto:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea id="description" name="description" required></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Preço:</label>
                    <input type="number" id="price" name="price" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="stock">Estoque:</label>
                    <input type="number" id="stock" name="stock" required>
                </div>

                <button type="submit" class="btn-submit">Adicionar Produto</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Loja Online. Todos os direitos reservados.</p>
    </footer>
</body>

</html>