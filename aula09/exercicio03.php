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
        $nota1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $nota2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $media = ($nota1+$nota2)/2;
        echo "A média entre $nota1 e $nota2 é igual a $media <br/>";
        if($media <5){
            $r = "REPROVADO";
        }
        elseif($media >= 5 && $media < 7){
            $r = "RECUPERAÇÃO";
        }
        else{
            $r= "APROVADO";
        }
        echo"Situação do aluno: $r";
    ?>
    <br/>
    <a input="button" class="botao" href="exercicio03.html">Voltar</a>
</div>
</body>
</html>
 