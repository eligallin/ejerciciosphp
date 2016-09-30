<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>ejemplo 01</title> 
</head><body> 
<?php 
//inicializamos 
echo "Array ordenado inicializado en la declaración y recorrido con un for: <hr>"; 
$array1 = array ( 
    'ID' => 6666, 
    'Nombre' => 'Eli', 
    'Apellido' => 'Galán Linares', 
    'Edad' => 24 ,
    'Nacionalidad' => 'Española' 
); 


//foreach clave=>elemento 
echo "<br>"; 
foreach ($array1 as $position=>$element){ 
    echo $position . ": " . $element . '<br>'; 
} 

?> 
</body></html>