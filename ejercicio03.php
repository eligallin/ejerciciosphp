<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio 03</title> 
</head><body> 
<?php 


echo "3. Crea una array asociativo con las cinco posiciones. En cada 
osición debes almacenar uno o más jugadores en un array ordenado. 
Muestra toda la plantilla usando listas no ordenadas html (ul y li) 
<br> <br>";

echo "¡Viva el Kai!";

$posiciones = array ( 
    'Alero' => array( 
        'jugador 1' => 'Juan', 
        'jugador 2' => 'Alfonso' 
    ),  
    'Pivot' => array( 
        'jugador 1' => 'Martin', 
        'jugador 2' => 'Alberto' 
    ),  
    'Base' => array( 
        'jugador 1' => 'Alonso', 
        'jugador 2' => 'Lorenzo' 
    ),  
     'Escolta' => array( 
        'jugador 1' => 'Aurelio', 
        'jugador 2' => 'Raul' 
    ),  
    'Al pivot' => array( 
        'jugador 1' => 'Pepe', 
        'jugador 2' => 'Lolo' 
    ),  
     
); 






foreach ($posiciones as $posicion=>$nombres){     
    echo '<ul>';
    echo "<li> $posicion </li>"; 
    foreach ($nombres as $clave=>$nombre){ 
       echo '<ul>'; 
        echo "<li> $nombre </li>"; 
        echo '</ul>'; 
    } 

 echo '</ul>';
 
} 


?> 
</body></html>