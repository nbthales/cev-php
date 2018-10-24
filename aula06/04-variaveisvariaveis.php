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
            $x = "abc";
            $$x = "def";
            echo "O conteudo da variavel X é $x";
            echo "</br>A variavel ABC recebeu o valor $abc";
        ?>
    </div>
</body>
</html>