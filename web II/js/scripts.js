document.addEventListener('DOMContentLoaded', function() {
  const bookList = document.getElementById('book-list');
  const cartContent = document.getElementById('cart-content');
  const checkoutButton = document.getElementById('checkout-button');
  const userInfo = document.getElementById('user-info');
  const userOrders = document.getElementById('user-orders');
  const userList = document.getElementById('user-list');
  const orderList = document.getElementById('order-list');

  // Exemplo de livros
  const books = [
      { title: "Livro A", isbn: "123456789", authors: "Autor A", publisher: "Editora A", year: 2020 },
      { title: "Livro B", isbn: "987654321", authors: "Autor B", publisher: "Editora B", year: 2021 }
  ];

  // Exibir livros na página de livros
  if (bookList) {
      books.forEach(book => {
          const bookItem = document.createElement('div');
          bookItem.className = 'book-item';
          bookItem.innerHTML = `<h3>${book.title}</h3><p>ISBN: ${book.isbn}</p><p>Autor(es): ${book.authors}</p><p>Editora: ${book.publisher}</p><p>Ano: ${book.year}</p><button onclick="addToCart('${book.title}')">Adicionar ao Carrinho</button>`;
          bookList.appendChild(bookItem);
      });
  }

  // Adicionar livro ao carrinho
  window.addToCart = function(bookTitle) {
      const cartItem = document.createElement('div');
      cartItem.className = 'cart-item';
      cartItem.innerHTML = `<p>${bookTitle}</p>`;
      cartContent.appendChild(cartItem);
  }

  // Finalizar compra
  if (checkoutButton) {
      checkoutButton.addEventListener('click', function() {
          window.location.href = 'checkout.php';
      });
  }

  // Exibir informações do usuário
  if (userInfo) {
      userInfo.innerHTML = `
          <p>Nome: [Nome do Usuário]</p>
          <p>Email: [Email do Usuário]</p>
          <p>Profissão: [Profissão do Usuário]</p>
          <p>Morada: [Morada do Usuário]</p>
          <p>Telefone: [Telefone do Usuário]</p>
      `;
  }

  // Exibir pedidos do usuário
  if (userOrders) {
      userOrders.innerHTML = `
          <p>Pedido #1: Livro A, Quantidade: 1, Preço: $10, Data: 01/01/2024</p>
          <p>Pedido #2: Livro B, Quantidade: 2, Preço: $20, Data: 02/02/2024</p>
      `;
  }

  // Exibir lista de usuários no admin
  if (userList) {
      userList.innerHTML = `
          <p>Usuário #1: Nome: Usuário A, Email: usuarioa@example.com</p>
          <p>Usuário #2: Nome: Usuário B, Email: usuariob@example.com</p>
      `;
  }

  // Exibir lista de pedidos no admin
  if (orderList) {
      orderList.innerHTML = `
          <p>Pedido #1: Cliente: Usuário A, Livro: Livro A, Quantidade: 1, Preço: $10, Data: 01/01/2024</p>
          <p>Pedido #2: Cliente: Usuário B, Livro: Livro B, Quantidade: 2, Preço: $20, Data: 02/02/2024</p>
      `;
  }
});
