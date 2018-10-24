<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8/">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title></title>
</head>
<body>
    <div>
        <?php
            $a =3;
            $b = &$a; #& crianco uma referência de b pra a
            $b += 5;
            echo"A variavel A vale $a";
            echo"</br>A variavel B vale $b";
        ?>
    </div>
</body>
</html>