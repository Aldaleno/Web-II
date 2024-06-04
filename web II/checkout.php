<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra - Livraria Camões</title>
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
        <h2>Finalizar Compra</h2>
        <form id="checkout-form" action="user.php" method="POST">
            <label for="delivery-address">Morada de Entrega:</label>
            <input type="text" id="delivery-address" name="delivery-address" required>
            <button type="submit">Confirmar Compra</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Livraria Camões</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
