<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio 01</title> 
</head><body> 
<?php 

echo "2. Array ordenado inicializado en la declaración con nombres en los campos y recorrido con un for sin mostrar campo y mostrando: <br> <br>"; 
echo "Equipo de baloncesto: <hr>";

$array1 = array ( 
    'alero' => 'Marta', 
    'pivot' => 'Ana ', 
    'base' => 'Merchi', 
    'escolta' => 'Alicia',
    'al pivot' => 'Lola' 
); 

foreach ($array1 as $position=>$element){ 
    echo  $element . '<br>'; 


} 

echo "<br>";
echo "Posición y nombre del jugador : <br> <hr>";

foreach ($array1 as $position=>$element){ 
    echo $position . ": " . $element . '<br>'; 


} 







?> 
</body></html>