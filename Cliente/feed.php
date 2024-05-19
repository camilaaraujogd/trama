<?php
include("../config.php");
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRAMA - MODA SUSTENTÁVEL</title>
  <link rel="stylesheet" href="../SemLogin/novidadesstyle.css">
  <link rel="icon" href="/imagens/trama_logo_small.svg">
  <script src="../javascript/headerCliente.js" defer></script>
  <script src="../javascript/Footer.js" defer></script>
  <script src="../javascript/menuscript.js" defer></script>
</head>

<body>

<div class="lancamento">
  <p>FAMÍLIA TRAMA</p>
</div>
<div class="produtos">
  <?php include_once("../produtos/produtoslogado.php"); ?>
</div>

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
