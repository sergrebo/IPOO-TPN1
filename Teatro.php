<?php
class Teatro{
    private $nombreTeatro;
    private $direccionTeatro;
    private $primerFuncion;
    private $segundaFuncion;
    private $tercerFuncion;
    private $cuartaFuncion;

    public function __construct($teatro, $direccion, $priFun, $segFun, $terFun, $cuaFun){
        $this->nombreTeatro=$teatro;
        $this->direccionTeatro=$direccion;
        $this->primerFuncion=$priFun;
        $this->segundaFuncion=$segFun;
        $this->tercerFuncion=$terFun;
        $this->cuartaFuncion=$cuaFun;
    }

    public function getNombreTeatro(){
        return $this->nombreTeatro;
    }

    public function getDireccionTeatro(){
        return $this->direccionTeatro;
    }

    public function getPrimeraFuncion(){
        return $this->primerFuncion;
    }

    public function getSegundaFuncion(){
        return $this->segundaFuncion;
    }

    public function getTercerFuncion(){
        return $this->tercerFuncion;
    }

    public function getCuartaFuncion(){
        return $this->cuartaFuncion;
    }

    public function setNombreTeatro($nuevoNombre){
        $this->nombreTeatro=$nuevoNombre;
    }

    public function setDireccionTeatro($nuevaDireccion){
        $this->direccionTeatro=$nuevaDireccion;
    }

    public function setPrimeraFuncion($nuevoNombre, $nuevoPrecio){
        $this->primerFuncion['Nombre']=$nuevoNombre;
        $this->primerFuncion['Precio']=$nuevoPrecio;
    }

    public function setSegundaFuncion($nuevoNombre, $nuevoPrecio){
        $this->segundaFuncion['Nombre']=$nuevoNombre;
        $this->segundaFuncion['Precio']=$nuevoPrecio;
    }

    public function setTercerFuncion($nuevoNombre, $nuevoPrecio){
        $this->tercerFuncion['Nombre']=$nuevoNombre;
        $this->tercerFuncion['Precio']=$nuevoPrecio;
    }

    public function setCuartaFuncion($nuevoNombre, $nuevoPrecio){
        $this->cuartaFuncion['Nombre']=$nuevoNombre;
        $this->cuartaFuncion['Precio']=$nuevoPrecio;
    }

    public function __toString(){
        return ('Teatro: '. $this->getNombreTeatro(). "\nDirección: ". $this->getDireccionTeatro(). 
        "\nPrimer función: ". $this->getPrimeraFuncion()['Nombre']. ' - Precio: $ '. $this->getPrimeraFuncion()['Precio']. 
        "\nSegunda función: ". $this->getSegundaFuncion()['Nombre']. ' - Precio: $ '. $this->getSegundaFuncion()['Precio']. 
        "\nTercer función: ". $this->getTercerFuncion()['Nombre']. ' - Precio: $ '. $this->getTercerFuncion()['Precio']. 
        "\nCuarta función: ". $this->getCuartaFuncion()['Nombre']. ' - Precio: $ '. $this->getCuartaFuncion()['Precio']. "\n");
    }

}
?>