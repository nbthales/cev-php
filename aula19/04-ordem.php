<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $v= array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
        print_r($v);
        //array_unshift($v, "O");
        //sort($v);
        //rsort($v);
        //asort($v);
        //arsort($v);
        //ksort($v);
        krsort($v);
       print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
