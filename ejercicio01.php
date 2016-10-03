<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio 01</title> 
</head><body> 
<?php 

echo "1. Array ordenado inicializado en la declaración y recorrido con un for: <hr>"; 

$array1 = array(6666,"Eli", 24, true, false, "Galán"); 

$elemento0 = $array1[0]; 
//El elemento 1 es $elemento0 y también $array1[0]


//lo podemos recorrer con el bucle foreach de dos maneras: 
echo "<hr> Recorrido mediante bucle foreach simple <br>"; 
foreach ($array1 as $element){ 
    echo $element . '<br>'; 
} 
//foreach clave->elemento 
echo "<hr> Recorrido mediante bucle foreach con posicion->elemento <br>"; 
foreach ($array1 as $position=>$element){ 
    echo $position . ": " . $element . '<br>'; 
} 
?> 
</body></html>