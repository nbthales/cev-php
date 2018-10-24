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
        $nome="Thales";
        $novo=str_pad($nome,20,".",STR_PAD_RIGHT);
        echo"O aluno $novo fez o exemplo!"
    ?>
</div>
</body>
</html>
 