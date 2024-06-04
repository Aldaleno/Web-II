<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - Livraria Camões</title>
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
        <h2>Registrar Cliente</h2>
        <form id="register-form" action="user.php" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
            <label for="surname">Apelido:</label>
            <input type="text" id="surname" name="surname" required>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="credit-card">Número de Cartão de Crédito:</label>
            <input type="text" id="credit-card" name="credit-card" required>
            <label for="profession">Profissão:</label>
            <input type="text" id="profession" name="profession">
            <label for="id-number">Número de BI ou Passaporte:</label>
            <input type="text" id="id-number" name="id-number" required>
            <label for="address">Morada:</label>
            <input type="text" id="address" name="address" required>
            <label for="phone">Telefone:</label>
            <input type="text" id="phone" name="phone">
            <button type="submit">Registrar</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Livraria Camões</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
