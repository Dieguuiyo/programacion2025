<?php
/*
 * ====================================
 * Sello del Desarrollador
 * ====================================
 * Nombre: [Diego Escobar]
 * * Videojuego Insignia: [Silent Hill]
 * ====================================
 */

// Define aquí tu videojuego insignia como un arreglo asociativo
// con las mismas claves que usaremos en el resto del proyecto.
// Ejemplo: $juego_insignia = ['titulo' => 'Chrono Cross', 'consola' => 'PlayStation', ...];

$videojuego = [
    'Titulo' => 'the legend of zelda',
    'Consola' => 'NES',
    'Año' => 1986,
    'Precio' => 50,
];

$videojuego["stock"] = 10;
$videojuego["EnVenta"] = 'verdadero';

$inventario = [
    'SuperMarioBros3' => [
        'Titulo' => 'Super Mario Bros. 3',
        'Consola' => 'NES',
        'Año' => 1988,
        'Precio' => 45,
        'Stock' => 15,
        'EnVenta' => 'Verdadero'
    ],
    'ChronnoTrigger' => [
        'Titulo' => 'Chrono Trigger',
        'Consola' => 'SNES',
        'Año' => 1995,
        'Precio' => 80,
        'Stock' => 5,
        'EnVenta' => 'Verdadero'
    ],
    'TheLegendOfZelda' => [
        'Titulo' => 'The Legend of Zelda',
        'Consola' => 'NES',
        'Año' => 1986,
        'Precio' => 50,
        'Stock' => 10,
        'EnVenta' => 'Verdadero'
    ]
];


foreach ($inventario as $juego) {
    echo $juego['Titulo'] . " - " . $juego['Consola'] . "\n";
}


foreach ($inventario as &$juego) {
    if ($juego['Consola'] == 'NES') {
        $juego['Precio'] = $juego['Precio'] * 0.9;
    }
}


$busqueda = "Chrono Trigger";
$encontrado = false;

foreach ($inventario as $juego) {
    if ($juego['Titulo'] == $busqueda) {
        echo "Título: " . $juego['Titulo'] . "\n";
        echo "Consola: " . $juego['Consola'] . "\n";
        echo "Año: " . $juego['Año'] . "\n";
        echo "Precio: " . $juego['Precio'] . "\n";
        echo "Stock: " . $juego['Stock'] . "\n";
        echo "En Venta: " . $juego['EnVenta'] . "\n";
        $encontrado = true;
        break;
    }
}

if (!$encontrado) {
    echo "No está disponible\n";
}


echo "Juegos antes: " . count($inventario) . "\n";

$inventario['SonicTheHedgehog'] = [
    'Titulo' => 'Sonic the Hedgehog',
    'Consola' => 'Sega Genesis',
    'Año' => 1991,
    'Precio' => 55,
    'Stock' => 8,
    'EnVenta' => 'Verdadero'
];

echo "Juegos después: " . count($inventario) . "\n";


unset($inventario['TheLegendOfZelda']);

?>