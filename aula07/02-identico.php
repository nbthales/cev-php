<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8/">
    <title></title>
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a === $b)?"SIM":"NAO";
        # == compara o resultado indepedente do tipo
        # === identico, compara o resultado e o tipo
        echo "As variaveis A e B são iguais? $r";
    ?>
</div>

</body>
</html>