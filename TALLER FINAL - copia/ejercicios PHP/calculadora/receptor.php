<?php

  $n1 = $_POST["n1"];
  $n2 = $_POST["n2"];
  $calcular = $_POST["accion"];  

  switch ($calcular) {
    case 'SUMA':

        echo($n1 + $n2);
        break;
    case 'RESTA':
      
        echo($n1 - $n2);
        break;
    case 'MULTIPLICACION':
      
        echo($n1 * $n2);
        break;
    case 'DIVISION':

        if ($n1<=0 || $n2 <= 0) {
            echo("No se puede dividir por cero");
        }else{
            echo($n1/$n2);
        }
        break;
    
    default:
        echo("No hay na");
        break;
  }
 

?>

