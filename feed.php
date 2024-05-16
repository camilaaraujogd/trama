<?php
  include("config.php");
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRAMA - MODA SUSTENTÁVEL</title>
  <link rel="stylesheet" href="novidadesstyle.css">
  <link rel="icon" href="/imagens/trama_logo_small.svg">
</head>
<body>

  <header>
    <div class="logo">
      <a href="index.html"><img src="imagens/trama_logo.png"></a>
  </div>
  <div class="hamburger-menu">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>
  <ul>
    <li><a class="navlink" href="sobre.html">SOBRE</a></li>
    <li><a class="navlink" href="produtos/produtos.html">PRODUTOS</a></li>
    <li><a class="navlink" href="sustentabilidade.html">SUSTENTABILIDADE</a></li>
  </ul>

  <a href="carrinho/carrinho.php">
    <button class="login-btn">little car</button>
  </a>


  <a href="cliente/perfil_cliente.php">
    <button class="login-btn">PERFIL</button>
  </a>

  </header>

<div class="lancamento">
  <p>PRODUTOS</p>
  <div class="destaques">
    <?php include_once("produtoslogado.php"); ?>
  </div>
</div>
<footer class="text-center footer text-center">

  <div class="footerbox">

      <div class="footerblock">
        
        <div class="nomeempresa ">
          <h4>TRAMA</h4>
          <p><br>RUA DA GLÓRIA, 372, SALA 505 CURITIBA, PARANÁ<br><b>(41) 99139-9175</b></p>
        </div>

        <div class="copyright"> <p>Copyright © 2023. Criado por Camila Araújo, Guilherme Belo & Yasmin Carmona.</p> </div>
  </div>

</footer>
<script src="javascript/menuscript.js"></script>
<div vw class="enabled">
  <div vw-access-button class="active"></div>
  <div vw-plugin-wrapper>
    <div class="vw-plugin-top-wrapper"></div>
  </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
  new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

</body>
</html>
