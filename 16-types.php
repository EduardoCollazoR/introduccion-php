<?php

declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado): ?string
{
    if ($autenticado) {
        echo "El usuario autenticado";
    } else {
        return "No  autenticado";
    }
}

$usuario = usuarioAutenticado(true);
echo $usuario;



include 'includes/footer.php';
