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
        $nome="   Jose da Silva   ";
        echo(strlen($nome));
        $novo = trim($nome);
        echo "<br/>";
        echo $novo;
        echo "<br/>";
        echo(strlen($novo));
    ?>
</div>
</body>
</html>
 