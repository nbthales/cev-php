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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m= ($nota1+$nota2)/2;
        //$sit = ($m >= 7)?"APROVADO":"REPROVADO";
        //$sit = (($m=($nota1+$nota2)/2) >= 7)?"APROVADO":"REPROVADO";
        echo "A media entre $nota1 e $nota2 é $m</br>
             A situação do aluno é: "
             .(($m >= 7)?"APROVADO":"REPROVADO");
    ?>
</div>

</body>
</html>