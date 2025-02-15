<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compra</title>
    <link rel="stylesheet" href="/projeto/estilo/Estilo_compra.css" />
    <link rel="stylesheet" href="/projeto/estilo/styles.css" />
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">Free Market</div>
        <div class="nav-links">
          <a href="/projeto/index.php">Início</a>
          <a href="#produtos">Produtos</a>
          <a href="#carrinho">Carrinho</a>
        </div>
      </nav>
    </header>

    <main id="mainCompra">
      <form action="finalCompra.php" method="post">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" />
        <label for="email">Digite seu email:</label>
        <input type="email" id="email" name="email" />
        <label for="cpf">Digite seu CPF:</label>
        <input type="number" id="cpf" name="cpf" />
        <label for="telefone">Digite seu telefone: </label>
        <input type="tel" id="telefone" name="telefone" />
        <button
          id="envio"
          onclick="window.location.href='/projeto/finalCompra.php';"
        >
          Enviar
        </button>
      </form>
    </main>

    <footer>
      <p>&copy; 2025 Free Market - Todos os Direitos Reservados</p>
    </footer>
  </body>
</html>
