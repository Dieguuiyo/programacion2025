<?php
$monedavalor = [
  43,
  45,
  8,
  'queso'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $CantidadDePesos = floatval($_POST["pesos"]);
    $moneda=$_POST["moneda"];

    switch($moneda) {
        case "dolares":
            $CantidadEnDolares=$CantidadDePesos/$monedavalor[0];
            echo "$CantidadEnDolares dolares";
            break;
            case "euros":
                $CantidadEnEuros=$CantidadDePesos/$monedavalor[1];
                echo "$CantidadEnEuros euros";
                break;
                case "reales":
                    $CantidadEnReales=$CantidadDePesos/$monedavalor[2];
                    echo "$CantidadEnReales reales";
                    break;
    

                }   }
    else{
        echo"no se conecto correctamente";
    }

?>