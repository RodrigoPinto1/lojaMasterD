<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <script src="https://kit.fontawesome.com/85191b6578.js" crossorigin="anonymous"></script>
    <script src="js/home.js" defer></script>
    <title>Loja Online</title>
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
        <div class="header-row">
            <h2 class="title">Admin Page</h2>
        </div>

        <?php include('adminHome.php') ?>
        <section id="products">
            <?php if (empty($products)): ?>
                <p>Não há produtos em destaque.</p>
            <?php else: ?>
                <div class="products-container">
                    <?php foreach ($products as $product): ?>
                        <div class="produto">
                            <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                            <p><?php echo htmlspecialchars($product['description']); ?></p>
                            <p>Preço: <?php echo number_format($product['price'], 2, '.'); ?> €</p>
                            <p><?php echo htmlspecialchars($product['stock']); ?></p>
                            <button class="addCart">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></button>
                        </div>
                    <?php endforeach; ?>
                    <div class="addProduct">
                        <form action="adminAddProductPage.php" method="POST">
                            <button id="addProductBtn">Adicionar Produto <i class="fa-solid fa-plus"></i></button>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Loja Online. Todos os direitos reservados.</p>
    </footer>
</body>

</html>