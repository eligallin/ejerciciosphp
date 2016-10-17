<?php
class usuario
{
    private $_nombre; 
    private $_telefono;
    function __construct($_nombre, $_telefono) 
    {   
        $this->_nombre = $_nombre;
        $this->_telefono = $_telefono;
        echo " usuario:  ".$this->getNombre();
        echo "<br> telefono: ". $this->getTelefono();
    }


    function getNombre(){
        return  $this->_nombre;
    }
     function setNombre($_nombre){
         $this->_nombre = $_nombre;
    }

     function getTelefono(){
        return  $this->_telefono;
    }
     function setTelefono($_telefono){
        $this->_telefono = $_telefono;
    }
}

?>