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
        $ano = $_GET["an"];
        $idade = 2016 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.</br>";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
        echo"E dessa forma seu voto é $tipo";
    ?>
</div>

</body>
</html>