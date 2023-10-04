<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?php
    $hotel= array(
    "planta 1" => array(),   
   " planta 2"  => array(),
   " planta 3" => array(), 
    "planta 4"  => array(),
   " planta 5" => array(), 
  "  planta 6"  => array(),
   " planta 7" => array(), 
   " planta 8" => array(), 
   " planta 9"  => array(),
  "  planta 10" => array()     );
   foreach ($hotel as $planta => &$habs) {
        for ($i = 1; $i <= 10; $i++) {
            $persones = rand(0, 4);
            $habs[$i] = $persones;
            echo "A l'habitació " . $i . " de la " . $planta . " hi han " . $persones . " persones.";
            
            if ($persones === 0) {
                echo " Està buida.";
            } elseif ($persones === 5) {
                echo " Està plena.";
            }    echo "\n";
    }
    }
    ?>
  </body>
</html>

