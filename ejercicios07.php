<!DOCTYPE html> 
<html><head> 
        <meta charset="UTF-8"> 
        <title>Ejercicio 07</title> 
</head><body> 
<?php
//Probando los métodos mágicos
class Ractangulo
{
    private $_base; 
    private $_altura;
     
   

    public function __construct($base, $altura)   //así los públicoswww
    {

        echo "Construyento nuevo rectangulo <hr> ";
        $this->_base = $base;
        $this->_altura = $altura;
      
    }

    public function _toString(){

        return "Rectangulo de $this->_base x &this->_altura";
    }

    public function perimetro()
    {

      return $this->_base*2 + $this->_altura*2;
    }


   public  function superficie()
    {
        
         return $this->_base* $this->_altura;
    }
}






?>

</body></html> 