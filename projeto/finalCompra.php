<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/projeto/estilo/styles.css" />
  </head>

  <body>
    <header>
      <nav>
        <div class="logo">Free Market</div>
        <div class="nav-links">
          <a href="#home">Início</a>
          <a href="#produtos">Produtos</a>
          <a href="#carrinho">Carrinho</a>
        </div>
      </nav>
    </header>

    <main id="Completo">
      <h1>Compra Efetuada com Sucesso!</h1>
    </main>
    <?php
    // Verifica se o nome foi enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o nome do formulário
        $nome = htmlspecialchars($_POST['nome']);
        
        // Exibe a mensagem de boas-vindas
        echo "<h1>Olá, <strong>$nome</strong>! Sua compra foi concluída!</h1>";
    } else {
        // Se o formulário não foi enviado, exibe uma mensagem de erro
        echo "<h1>Você não colocou seus dados.</h1>";
    }
    ?>

    <button class=".buy-button" onclick="window.location.href='/paginacompra/compra.html';">Voltar</button>

    <footer>
      <p>&copy; 2025 Free Market - Todos os Direitos Reservados</p>
    </footer>
  </body>
</html>
