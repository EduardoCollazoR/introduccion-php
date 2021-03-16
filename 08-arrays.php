<?php include 'includes/header.php';

$carrito=['tablet','television','computadora'];

// para ver los contenidos de un array 
echo '<pre>';
var_dump($carrito[1]);
echo '</pre>';

// acceder a un elemento del arreglo 
echo $carrito[1];

// anade un elemento en el indice 3 del arreglo
$carrito[3]='Nuevo producto...';

// anade un elemento nuevo al final..
array_push($carrito,'Audifonos');

// anade al inicio 
array_unshift($carrito,'Smartwatch');

echo '<pre>';
var_dump($carrito);
echo '</pre>';



$clientes = array('Cliente 1', 'Cliente 2','Cliente 3');
echo '<pre>';
var_dump($clientes);
echo '</pre>';


echo $clientes[1];
include 'includes/footer.php';