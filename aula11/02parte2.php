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
            $i = 1;
            while($i <=5){
                $v = "num".$i;
                $url = "v".$i;
                $$v = isset($_GET[$url])?$_GET[$url]:0;
                $i++;
            }
            echo"$num1<br/> $num2<br/> $num3<br/> $num4<br/> $num5<br/>"

        ?>
    </form>
</div>
</body>
</html>
 