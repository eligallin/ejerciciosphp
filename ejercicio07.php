<?php

require_once 'rectangulo.php';

$rectangulo = new Rectangulo (20, 12) ;

//var_dumb($rectangulo);
echo $rectangulo;
echo '<br>';

echo "Su superficie es " . $rectangulo->superficie();
echo '<br>';
echo "Su perimetro es " . $rectangulo->perimetro();

