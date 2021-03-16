<?php include 'includes/header.php';
$nombreCliente="Juan";

echo strlen($nombreCliente); // toma en cuenta espacios en blancos


// conocer extension de un string
var_dump($nombreCliente);

// eliminar espacios en blanco 
$texto=trim($nombreCliente);
echo strlen($nombreCliente);

//convertir a mayus
echo strtoupper($nombreCliente);

//convertir a minus
echo strtolower($nombreCliente);


$mail1="correo@correo.com";
$mail2="Correo@correo.com";


var_dump(strtolower($mail1)===strtolower($mail2));

// reemplazar letras
echo str_replace('Juan', 'J',$nombreCliente);

// revisar si un string existe o no 
echo strpos($nombreCliente,'Juan');

echo '<br/>';
// concatenar 
$tipoCliente="Premium";

echo "El cliente " .$nombreCliente. " es ".$tipoCliente;

echo "El cliente {$nombreCliente} es {$tipoCliente} ";


include 'includes/footer.php';