<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras - Livraria Camões</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Livraria Camões</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="books.php">Livros</a></li>
                <li><a href="register.php">Registrar</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cart.php">Carrinho</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Seu Carrinho de Compras</h2>
        <div id="cart-content">
            <?php
            // Exemplo de itens no carrinho
            $cart_items = [
                ["title" => "Livro A", "quantity" => 1, "price" => 10.00],
                ["title" => "Livro B", "quantity" => 2, "price" => 20.00]
            ];
            foreach ($cart_items as $item) {
                echo "<div class='cart-item'>";
                echo "<p>" . $item['title'] . " - Quantidade: " . $item['quantity'] . " - Preço: $" . $item['price'] . "</p>";
                echo "</div>";
            }
            ?>
        </div>
        <button id="checkout-button">Finalizar Compra</button>
    </main>
    <footer>
        <p>&copy; 2024 Livraria Camões</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
