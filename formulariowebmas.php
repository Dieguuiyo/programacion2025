<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $nombre = $_POST["nombre"];
   $edad = $_POST["edad"];
   $raza = $_POST["raza"];
   $vacunas = $_POST["vacunas"];
   $FechaNac = $_POST["FechaNac"];
   
   if (count(explode(" ", $nombre)) < 1) {
       echo "nombre incorrecto.";
   } else {
       echo "se recibio correctamente el nombre. <br>";
   }
   
   if (count(explode(" ", $edad)) < 1) {
       echo "edad incorrecta.";
   } else {
       echo "se recibio correctamente la edad. <br>";
   }
   
   if (count(explode(" ", $raza)) < 1) {
       echo "raza incorrecta.";
   } else {
       echo "se recibio correctamente la raza. <br>";
   }
   
   if (count(explode(" ", $vacunas)) < 1 ) {
       echo "vacunas incorrectas.";
   } else {
       echo "se recibieron correctamente las vacunas. <br>";
   }
   
   if (count(value: explode(" ", $FechaNac)) < 1) {
       echo "fecha incorrecta.";
   } else {
       echo "se recibio correctamente la fecha de nacimiento. <br>";
   }
     
    $mascota = [
        'nombre' => $nombre,
        'edad' => $edad,
        'raza' => $raza,
        'vacunas' => $vacunas,
        'FechaNac' => $FechaNac
    ];
       var_dump($mascota); 
        
};
?>
    