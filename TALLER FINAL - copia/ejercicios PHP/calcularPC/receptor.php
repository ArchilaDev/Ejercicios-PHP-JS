<?php
    $calcular = $_POST["calcular"];
    $dato = $_POST["dato"];

     if ( $dato >= 85) {
            echo("La cpu esta sobrecalentada <br>");
            echo("Revise el servidor");
        };
        if ( $dato >= 90) {
            echo("La RAMx esta sobrecalentada <br>");
            echo("Revise el servidor <br>");
        };
        if ( $dato >= 95) {
            echo("El disco esta sobrecalentada <br>");
            echo("Revise el servidor <br>");
        };
        if ( $dato >= 300) {
            echo("La red esta sobrecalentada <br>");
            echo("Revise el servidor <br>");
        };

        if($dato < 85){
            echo("No hay nada que revisar");
        }
?>