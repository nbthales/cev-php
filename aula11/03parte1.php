<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="03parte2.php">
        <?php
        $i=0;
        echo"Inicio: <input type = 'number' name = 'inicio' max = '100' min = '0' value = '0' /><br />";
        echo"Final: <input type = 'number' name = 'fim' max = '100' min = '0' value = '0' /><br />";
        echo"Incremento: <input type = 'number' name = 'incr' max = '10' min = '0' value = '0' /><br />";
        ?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>
</div>
</body>
</html>
 