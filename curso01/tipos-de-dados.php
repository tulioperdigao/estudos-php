<?php
    $s = "Isso é uma String.";
    echo $s;

    echo "\n";
    echo "\n";

    echo"Esses abaixo são números / interger:";

    echo "\n";

    $number = 10;
    $x = -50;
    var_dump($number);
    var_dump($x);

    echo "\n";
    echo "\n";

    echo"Esses abaixo são datas:";

    echo "\n";

    date_default_timezone_set('America/Sao_Paulo');
    $data = date ("d/m/Y H:i:s");
    echo $data;

    echo "\n";
    echo "\n";

    echo"Esses abaixo são array:";

    echo "\n";

    $cursos = array("PHP", "JAVA", "REDES", "C");
    print_r($cursos[2])
?>