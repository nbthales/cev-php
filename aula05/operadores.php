<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8/">
    <link rel="stylesheet" href="_css/estilo.css"
    <title></title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"]; //...operadores.php?a=5&b=10
        $n2 = $_GET["b"]; //pega o valor da url
        $m = ($n1 + $n2) /2;
        echo "<h2>Valores Recebidos: $n1 e $n2</h2>";
        echo "A soma vale ".($n1+$n2);
        echo "</br>A subtração vale ".($n1-$n2);
        echo "</br>A multiplicação vale ".($n1*$n2);
        echo "</br>A divisão vale ".($n1/$n2);
        echo "</br>O módulo vale ".($n1%$n2);
        echo "</br>A média vale $m";

    ?>
</div>
</body>
</html>