<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros - Livraria Camões</title>
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
        <h2>Livros Disponíveis</h2>
        <div id="book-list">
            <?php
            // Exemplo de livros
            $books = [
                ["title" => "Livro A", "isbn" => "123456789", "authors" => "Autor A", "publisher" => "Editora A", "year" => 2020],
                ["title" => "Livro B", "isbn" => "987654321", "authors" => "Autor B", "publisher" => "Editora B", "year" => 2021]
            ];
            foreach ($books as $book) {
                echo "<div class='book-item'>";
                echo "<h3>" . $book['title'] . "</h3>";
                echo "<p>ISBN: " . $book['isbn'] . "</p>";
                echo "<p>Autor(es): " . $book['authors'] . "</p>";
                echo "<p>Editora: " . $book['publisher'] . "</p>";
                echo "<p>Ano: " . $book['year'] . "</p>";
                echo "<button onclick=\"addToCart('" . $book['title'] . "')\">Adicionar ao Carrinho</button>";
                echo "</div>";
            }
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Livraria Camões</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
