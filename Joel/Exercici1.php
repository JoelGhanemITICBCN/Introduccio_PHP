<!DOCTYPE html>
<html>
  <head>
    <title>Exercici1</title>
  </head>
  <body>
    <?php
    $taules = [1,2,3,4,5,6,7,8,9,10];
    for($i = 0; $i <count($taules); $i++) {
    $num_comensals = rand(0,5);
    echo "La taula " .($i) . " té " . $num_comensals. " comensals ";

    if($num_comensals === 0){
    echo " Está buida.";
    } elseif($num_comensals === 5){
    echo " Está plena.";
    }
    echo "\n";
    }
    ?>
  </body>
</html>

