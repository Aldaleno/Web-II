<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário - Livraria Camões</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Livraria Camões</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="books.php">Livros</a></li>
                <li><a href="user.php">Minha Conta</a></li>
                <li><a href="cart.php">Carrinho</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Bem-vindo, [Nome do Usuário]</h2>
        <p>Aqui você pode gerenciar suas informações e visualizar seus pedidos.</p>
        <div id="user-info">
            <h3>Informações Pessoais</h3>
            <?php
            // Exemplo de informações do usuário
            echo "<p>Nome: João Silva</p>";
            echo "<p>Email: joao.silva@example.com</p>";
            echo "<p>Profissão: Engenheiro</p>";
            echo "<p>Morada: Rua Exemplo, 123</p>";
            echo "<p>Telefone: 912345678</p>";
            ?>
        </div>
        <div id="user-orders">
            <h3>Meus Pedidos</h3>
            <?php
            // Exemplo de pedidos do usuário
            echo "<p>Pedido #1: Livro A, Quantidade: 1, Preço: $10, Data: 01/01/2024</p>";
            echo "<p>Pedido #2: Livro B, Quantidade: 2, Preço: $20, Data: 02/02/2024</p>";
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Livraria Camões</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
