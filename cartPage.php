<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <script src="https://kit.fontawesome.com/85191b6578.js" crossorigin="anonymous"></script>

    <title>Carrinho de Compras</title>
</head>

<body>
    <header>
        <h1>Carrinho de Compras</h1>
        <nav>
            <ul>
                <li><a href="homePage.php">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="cart">
            <h2>Itens no Carrinho</h2>
            <?php include('cart.php') ?>
            <?php if (empty($cartItems)): ?>
                <p>Seu carrinho está vazio.</p>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cartItems as $item): ?>
                            <tr>

                                <td><?php echo htmlspecialchars($item['name']); ?></td>
                                <td><?php echo htmlspecialchars($item['description']); ?></td>
                                <td><?php echo number_format($item['price'], 2); ?>€</td>
                                <td><?php echo htmlspecialchars($item['stock']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p><strong>Total: €<?php echo number_format($total, 2); ?></strong></p>
                <button id="checkout">Finalizar Compra</button>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Loja Online. Todos os direitos reservados.</p>
    </footer>
</body>

</html>