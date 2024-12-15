<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/85191b6578.js" crossorigin="anonymous"></script>
    <script src="js/home.js" defer></script>
    <title>Loja Online</title>
</head>

<body>
    <header>
        <h1>Bem-vindo à Loja Online</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="header-row">
            <h2 class="title">Produtos em Destaque</h2>
            <button id="showCart"><a href="cartPage.php" id="linkCart">Mostrar carrinho <i class="fa-solid fa-cart-shopping"></i></a></button>
        </div>
        <section id="destaques">
            <div class="produto">
                <img src="img/produto1.jpg" alt="Something Wrong!">
                <h3>Produto 1</h3>
                <p>Descrição do Produto 1</p>
                <p>Preço: €10.00</p>
                <button class="addCart">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="produto">
                <img src="img/produto2.jpg" alt="Something Wrong!">
                <h3>Produto 2</h3>
                <p>Descrição do Produto 2</p>
                <p>Preço: €20.00</p>
                <button class="addCart">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="produto">
                <img src="img/produto3.jpg" alt="Something Wrong!">
                <h3>Produto 3</h3>
                <p>Descrição do Produto 3</p>
                <p>Preço: €30.00</p>
                <button class="addCart">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="produto">
                <img src="img/produto4.jpg" alt="Something Wrong!">
                <h3>Produto 4</h3>
                <p>Descrição do Produto 4</p>
                <p>Preço: €10.00</p>
                <button class="addCart">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="produto">
                <img src="img/produto5.jpg" alt="Something Wrong!">
                <h3>Produto 5</h3>
                <p>Descrição do Produto 5</p>
                <p>Preço: €20.00</p>
                <button class="addCart">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="produto">
                <img src="img/produto6.jpg" alt="Something Wrong!">
                <h3>Produto 6</h3>
                <p>Descrição do Produto 6</p>
                <p>Preço: €30.00</p>
                <button class="addCart">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="produto">
                <img src="img/produto7.jpg" alt="Something Wrong!">
                <h3>Produto 7</h3>
                <p>Descrição do Produto 7</p>
                <p>Preço: €10.00</p>
                <button class="addCart">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="produto">
                <img src="img/produto8.jpg" alt="Something Wrong!">
                <h3>Produto 8</h3>
                <p>Descrição do Produto 8</p>
                <p>Preço: €20.00</p>
                <button class="addCart">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
            <div class="produto">
                <img src="img/produto9.jpg" alt="Something Wrong!">
                <h3>Produto 9</h3>
                <p>Descrição do Produto 9</p>
                <p>Preço: €30.00</p>
                <button class="addCart">Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Loja Online. Todos os direitos reservados.</p>
    </footer>
</body>

</html>