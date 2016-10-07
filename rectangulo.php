
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

    public function __toString(){

        return "Rectangulo de $this->_base x $this->_altura";
    }

    public function perimetro()
    {

      return 2* ($this->_base + $this->_altura);
    }


   public  function superficie()
    {
        
         return $this->_base * $this->_altura;
    }
}






?>

