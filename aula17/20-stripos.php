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
        $frase="Estou aprendendo PHP";
        $pos=stripos($frase,"php");
        print("Encontrado na posição $pos");
    ?>
</div>
</body>
</html>
 