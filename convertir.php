<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valordolar = 40;

    $CantidadEnPesos = floatval($_POST["pesos"]);

    $CantidadDolares = $CantidadEnPesos / $valordolar;

    echo "$CantidadEnPesos pesos uruguayos equivalen a " . $CantidadDolares . " dolares";
} else {
    echo "error en la solicitud";
}
?>