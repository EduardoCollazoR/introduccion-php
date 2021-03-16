<?php include 'includes/header.php';

// in_array buscar elementos en un arreglo

$carrito=['Tablet','Computadora','Television'];

var_dump(in_array('Tablet',$carrito));

var_dump(in_array('Audifonos',$carrito));

//ordenar elementos de un arreglo

$numeros=array(1,2,3,4,1,2);
sort($numeros);// de menor a mayor
rsort($numeros);// de mayor  a menor

echo '<pre>';
var_dump($numeros);
echo '</pre>';


// ordenar arreglo asociativo

$cliente=array(
    'saldo'=>200,
    'tipo'=>'Premium',
    'nombre'=> 'Juan'
);
echo '<pre>';
var_dump($cliente);
echo '</pre>';

asort($cliente); // ordena por valores (orden alfabetico)
arsort($cliente); // ordena por valores z primero
ksort($cliente);// ordena por llaves (orden alfabetico a-z)
krsort($cliente);// ordena por llaves (orden alfabetico z-a)
echo '<pre>';
var_dump($cliente);
echo '</pre>';



include 'includes/footer.php';