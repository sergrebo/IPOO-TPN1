<?php
//Ss
class Cuadrado {
    private $puntoA;
    private $puntoB;
    private $puntoC;
    private $puntoD;

    public function __construct($a, $b, $c, $d){
        $this->puntoA=$a;
        $this->puntoB=$b;
        $this->puntoC=$c;
        $this->puntoD=$d;
    }

    public function getA(){
        return $this->puntoA;
    }

    public function getB(){
        return $this->puntoB;
    }

    public function getC(){
        return $this->puntoC;
    }

    public function getD(){
        return $this->puntoD;
    }

    public function setA($a){
        $this->puntoA=$a;
    }

    public function setB($b){
        $this->puntoB=$b;
    }

    public function setC($c){
        $this->puntoC=$c;
    }

    public function setD($d){
        $this->puntoD=$d;
    }

    public function __toString(){
        return "Punto A: (". $this->getA()[0]. ",". $this->getA()[1].")\nPunto B: (". $this->getB()[0]. ",". $this->getB()[1].")\nPunto C: (". $this->getC()[0]. ",". $this->getC()[1]. ")\nPunto D: (". $this->getD()[0]. ",". $this->getD()[1]. ")\n"; //HORRIBLE COMO FUNCIONA print_r
    }

    public function obtenerLado(){
        $arregloA=$this->getA();
        $arregloB=$this->getB();
        if ($arregloA[0]<>$arregloB[0]) {
            $lado=abs($arregloA[0]-$arregloB[0]);
        } else {
            $lado=abs($arregloA[1]-$arregloB[1]);
        }
        return $lado;
    }

    public function area(){
        $area=pow($this->obtenerLado(), 2);
        return $area;
    }

    public function desplazar($nuevoVertice){
        $lado=$this->obtenerLado();
        $this->setC($nuevoVertice);
        $nuevoA=[$nuevoVertice[0], $nuevoVertice[1]+$lado];
        $this->setA($nuevoA);
        $nuevoB=[$nuevoVertice[0]+$lado, $nuevoVertice[1]+$lado];
        $this->setB($nuevoB);
        $nuevoD=[$nuevoVertice[0]+$lado, $nuevoVertice[1]];
        $this->setD($nuevoD);
    }

    public function aumentarTamano($tamañoExtra){
        $nuevoLado=$tamañoExtra+$this->obtenerLado();
        $verticeFijo=$this->getC();
        $nuevoA=[$verticeFijo[0], $verticeFijo[1]+$nuevoLado];
        $this->setA($nuevoA);
        $nuevoB=[$verticeFijo[0]+$nuevoLado, $verticeFijo[1]+$nuevoLado];
        $this->setB($nuevoB);
        $nuevoD=[$verticeFijo[0]+$nuevoLado, $verticeFijo[1]];
        $this->setD($nuevoD);
    }
}
?>