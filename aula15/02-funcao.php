<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        #include "funcoes.php";
        require "funcoes2.php";
        # include_once é apenas carregar uma vez
        # require_once se já carregou, não precisa mais

        echo"<h1>Testando novas funções</h1>";
        ola();
        mostraValor(4);

        echo"<h2>Finalizando Programa...</h2>"
    ?>
</div>
</body>
</html>
 