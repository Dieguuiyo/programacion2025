<?php
$tripu=0;
$tripulantes=[];
$tripulantes[]= 'Alex Rider';

$tripulantes[]= 'Mia Kovalik';

$tripulantes[]= 'Raj Patel';

$tripulantes[]= 'Elena Vega';

$tripulantes[]= 'Jules Bergman';

$tripulantes[1]= 'Nadia Petrov';

$tripulantes[]= 'Sam Carter';

$tripulantes[]= 'Leo Wu';

$tripulantes[]= 'Zara Khan';

$tripulantes[0]= ' Dmitri Volkov';

$tripulantes[1]= ' Yuki Tanaka';

$tripu++;
unset($tripulantes[0]);
echo ($tripulacion[2]);


// array_push()

array_unshift($tripulantes,);
$contador = 0;
$posicion = 0;
foreach ($tripulante as $tripulacion) {
    echo $tripulacion;
    if ($tripulante == 'Zara Khan'){
        $posicion = $contador + $tripulante . "<br>";
        echo $contador;
    }
    $contador++;
}
var_dump($tripulantes); 
function agregartripulante ($tripulanteAdd, &$tripulantes){
    $tripulantes [] = $tripulanteAdd;
    
}

agregartripulante("pepe", $tripulantes);
var_dump($tripulantes);

function evacuartripulantes (&$tripulacion) {
    $cantidad = count($tripulacion);
    $posicion = $cantidad - 1;
    unset($tripulacion [$posicion]);

}
?>