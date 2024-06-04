<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Livraria Camões</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Livraria Camões - Admin</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="books.php">Livros</a></li>
                <li><a href="admin.php">Admin Dashboard</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Admin Dashboard</h2>
        <section id="manage-books">
            <h3>Gerenciar Livros</h3>
            <form id="book-form" action="admin.php" method="POST">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" required>
                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn" required>
                <label for="authors">Autores:</label>
                <input type="text" id="authors" name="authors" required>
                <label for="publisher">Editora:</label>
                <input type="text" id="publisher" name="publisher" required>
                <label for="year">Ano de Publicação:</label>
                <input type="text" id="year" name="year" required>
                <button type="submit">Adicionar/Editar Livro</button>
            </form>
        </section>
        <section id="manage-users">
            <h3>Gerenciar Usuários</h3>
            <div id="user-list">
                <?php
                // Exemplo de lista de usuários
                echo "<p>Usuário #1: Nome: Usuário A, Email: usuarioa@example.com</p>";
                echo "<p>Usuário #2: Nome: Usuário B, Email: usuariob@example.com</p>";
                ?>
            </div>
        </section>
        <section id="manage-orders">
            <h3>Gerenciar Pedidos</h3>
            <div id="order-list">
                <?php
                // Exemplo de lista de pedidos
                echo "<p>Pedido #1: Cliente: Usuário A, Livro: Livro A, Quantidade: 1, Preço: $10, Data: 01/01/2024</p>";
                echo "<p>Pedido #2: Cliente: Usuário B, Livro: Livro B, Quantidade: 2, Preço: $20, Data: 02/02/2024</p>";
                ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Livraria Camões</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
