<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão PHP</title>
</head>
<body>
    <?php
    
        $string = "Curso na DIO";
        $numeros = 50;
        $array = array("PHP", "HTML", "CSS", "JAVASCRIPT");
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("d/m/Y H:i:s");

    ?>

    <h4>
        Essa é uma variável do tipo string, para implementar uma variável do tipo string utilizamos aspas simples ('') ou duplas ("") => 

        <?php        
            echo $string;   
        ?>
    </h4>
    <h4>
        Essa é uma variável do tipo números/ integer, para implementar essa variável utilizamos somente os números desta forma =>

        <?php  
            echo $numeros;
        ?>
    </h4>
    <h4>
        Essa é uma variável com um array, para implementar um Array em uma variável utilizamos desta forma =>

        <?php 
            print_r($array);
        ?>
    </h4>
    <h4>
        Vamos agora implementar uma variável do tipo datas, para implementar a variável com datas utilizamos uma função própria do PHP desta forma =>
        <?php
            print $data;
        ?>
    </h4>
</body>
</html>