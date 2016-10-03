<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio 04</title> 
</head><body> 
<?php 

echo "4. Crea dos funciones llamadas mayor y menor. Cada una de ellas debe ecibir un array numérico y devolver el valor mayor y menor respectivamente. Paso por referencia <br> <br>";

function mayor( & $array1) 
{ 
    $mayormayor = 0; 
	
	foreach ($array1 as $element){ 
    if ($element >= $mayormayor)
    	$mayormayor = $element;
   
    else 
    echo $element . ' no es el mayor <br>'; 
} 

     return $mayormayor; 
}; 


function menor( & $array1) 
{ 
     $menormenor=100;
	foreach ($array1 as $element){ 
    if ($element <= $menormenor)
    	$menormenor = $element;
   
    else 
    echo $element . ' no es el menor <br> '; 
} 

     return $menormenor; 
}; 



$array1 = array(3, 17, 1, 6, 2); 

$numGrande=mayor($array1);

$numPequeño=menor($array1);


echo "<br>" . $numGrande . " es el mayor <br><br> ";
echo $numPequeño . " es el menor <br>";





?> 
</body></html>