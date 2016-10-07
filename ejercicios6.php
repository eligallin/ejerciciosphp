<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio 06</title> 
</head><body> 
<?php 



  <form method="post" action="ejercicio06.php"> 
        <label>Titulo</label><input type="text" value="" name="nombre"> <br> 
        <label>ISBN</label><input type="password" value="" name="apellidos"> <br> 
        idioma: <br> 
        <input type="radio" name="idioma" value="ingles" checked> ingles <br> 
        <input type="radio" name="idioma" value="español"> español<br> 
         <br> 
     
        
         
        Elige un genero:  <br> 
        <select name="genero"> 
         <optgroup label="Grupo de generos"> 
           <option>teatro</option> 
           <option>poesia</option> 
           <option>narrativa</option> 
          <option selected>blanco</option> 
         </optgroup> 
       </select> 
       <input type="submit" value="enviar"> 
    </form> 

?> 
</body></html> 