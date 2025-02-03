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

    <?php
    // Processamento primeiro, antes de qualquer HTML
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nome = htmlspecialchars($_POST['nome']);
      $email = htmlspecialchars($_POST['email']);
      $cpf = htmlspecialchars($_POST['cpf']);
      $telefone = htmlspecialchars($_POST['telefone']);
    
      // Aqui você normalmente processaria os dados (salvar no banco, etc.)
    
      // Depois do processamento, exibir HTML
    ?>

    <main id="Completo">
        <h1>Olá, <strong><?= $nome ?></strong>! Sua compra foi concluída!</h1>
        <p>Detalhes da compra:</p>
        <ul>
            <li>Email: <?= $email ?></li>
            <li>CPF: <?= $cpf ?></li>
            <li>Telefone: <?= $telefone ?></li>
        </ul>
    </main>
    
    <button class="buy-button" onclick="window.location.href='/projeto/compra.php';">Voltar</button>

    <?php
    } else {
      echo "<h1>Erro: Você não enviou os dados do formulário corretamente.</h1>";
      echo "<button class='buy-button' onclick=\"window.location.href='/projeto/compra.php';\">Voltar</button>";
    }
    ?>

    <button class=".buy-button" onclick="window.location.href='/projeto/compra.php';">Voltar</button>

    <footer>
      <p>&copy; 2025 Free Market - Todos os Direitos Reservados</p>
    </footer>
  </body>
</html>
