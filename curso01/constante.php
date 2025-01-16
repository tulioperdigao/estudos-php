<?php
    //Entregador de delivery ganha 80 reais por dia porém ainda tem as gorjetas dos clientes.

    define("valorDia", "80");
    $gorjetas = 40;

    echo valorDia + $gorjetas;
    
    echo "\n";

    $gorjetas = 15;
    echo valorDia + $gorjetas;
?>