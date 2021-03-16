<?php include 'includes/header.php';

$autenticado = true;
$admin = true;
if ($autenticado && $admin) {
    echo 'Usuario autenticado';
} else {
    echo 'Usuario no autenticado, inicia sesion';
}
echo "<br>";

// if anidado
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

if (!empty($cliente)) {
    echo 'el arreglo no esta vacio';
    if ($cliente['saldo'] > 0) {
        echo 'el saldo del cliente esta disponible';
    } else {
        echo 'no hay saldo';
    }
}

echo "<br>";

// else if 
if ($cliente['saldo'] > 0) {
    echo 'El cliente tiene saldo';
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo 'el cliente es premium';
} else {
    echo 'no hay cliente definido o no tiene saldo o no es premium';
}


//switch 
echo "<br>";
$tecnologia = "PHP";
switch ($tecnologia) {
    case 'PHP':
        echo "PHP";
        break;
    case 'JavaScript';
        echo 'Genial';
        break;
    case 'HTML';
        echo 'emm..';
        break;
    default:
        echo "Algun otro lenguaje";
        break;
}
include 'includes/footer.php';
