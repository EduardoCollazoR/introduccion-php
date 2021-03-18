<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television',
        'precio' => 400,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 500,
        'disponible' => false
    ]
];

echo '<pre>';
var_dump($productos);
$json = json_encode($productos, JSON_UNESCAPED_UNICODE); // convertir arreglo en un string 

$json_array = json_decode($json);
var_dump($json);
var_dump($json_array);
echo '</pre>';




include 'includes/footer.php';
