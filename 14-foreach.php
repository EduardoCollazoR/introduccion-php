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

foreach ($productos as $producto) { ?>
    <!-- // echo '<pre/>';
    // var_dump($producto);
    // echo '<pre/>'; -->
    <li>
        <p> Producto: <?php echo $producto['nombre']; ?></p>
        <p> Precio: <?php echo "$ " . $producto['precio']; ?></p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible'; ?></p>
    </li>
<?php
    echo '
    <pre>';
    var_dump($producto);
    echo '
    <pre>';
}
include 'includes/footer.php';
