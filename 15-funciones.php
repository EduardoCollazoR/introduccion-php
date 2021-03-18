<?php

declare(strict_types=1);
include 'includes/header.php';



function sumar(int $numero1 = 0, int $numero2 = 0)
{
    echo $numero1 + $numero2;
}

sumar(10, 20);
// sumar(numero2: 10, numero1: 20); // parametros nombrados php 8

include 'includes/footer.php';
