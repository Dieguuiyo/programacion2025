<?php
$videojuego = [
    'Titulo' => 'the legend of zelda',
    'Consola' => 'NES',
    'Año' => 1986,
    'Precio' => 50,
];

$videojuego["stock"] = 10;
$videojuego["EnVenta"] = 'verdadero';

foreach ($videojuego as $clave => $valor) {
    echo " $clave: $valor |\n";
}

$inventario = [
    'SuperMarioBros3' => [
        'Consola' => 'NES',
        'Año' => 1988,
        'Precio' => 45,
        'Stock' => 15,
        'EnVenta' => 'Verdadero'
    ],
    'Chronno Trigger' => [
        'Consola' => 'SNES',
        'Año' => 1995,
        'Precio' => 80,
        'Stock' => 5,
        'EnVenta' => 'Verdadero'
    ],
    'The Legends Of Zelda' => [
        'Consola' => 'NES',
        'Año' => 1986,
        'Precio' => 50,
        'Stock' => 10,
        'EnVenta' => 'Verdadero'
    ]
];

foreach ($inventario as $clave => $valor) {
    echo "$clave: $valor |\n";
}

?>