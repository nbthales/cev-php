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
            $atual = $_GET["aa"];
            echo "O ano atual é $atual e o ano anterior é "
            .--$atual; #comentário
        ?>
    </div>
</body>
</html>