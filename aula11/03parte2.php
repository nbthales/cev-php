<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="02parte2.php">
        <?php
            $in = isset($_GET["inicio"])?$_GET["inicio"]:0;
            $fm = isset($_GET["fim"])?$_GET["fim"]:0;
            $ic = isset($_GET["incr"])?$_GET["incr"]:0;

        while($in >=$fm){
            echo $in."<br/>";
            $in+=$incr;
        }

        ?>
    </form>
    <br/><a href="javascript:history.go(-1)" class="botao"> Voltar</a>
</div>
</body>
</html>
 