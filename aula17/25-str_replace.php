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
        $frase="Gosto de estudar Matemática!!!";
        $novaFrase=str_ireplace("matemática","PHP",$frase);
        print($novaFrase);
    ?>
</div>
</body>
</html>
 