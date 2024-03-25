<?php
class Linea{
    private $pA;
    private $pB;
    private $pC;
    private $pD;

    public function __construct($a, $b, $c, $d){
        $this->pA=$a;
        $this->pB=$b;
        $this->pC=$c;
        $this->pD=$d;
    }

    public function getPA(){
        return $this->pA;
    }

    public function getPB(){
        return $this->pB;
    }

    public function getPC(){
        return $this->pC;
    }

    public function getPD(){
        return $this->pD;
    }

    public function setPA($nuevoA){
        $this->pA=$nuevoA;
    }

    public function setPB($nuevoB){
        $this->pB=$nuevoB;
    }

    public function setPC($nuevoC){
        $this->pC=$nuevoC;
    }

    public function setPD($nuevoD){
        $this->pD=$nuevoD;
    }

    public function mueveDerecha($d){       //Y LOS SIGNOS DE $d COMO LOS INTERPRETO???
        $this->setPA($this->getPA()+$d);
        $this->setPC($this->getPC()+$d);
    }

    public function mueveIzquierda($d){
        $this->setPA($this->getPA()-$d);
        $this->setPC($this->getPC()-$d);
    }

    public function mueveArriba($d){
        $this->setPB($this->getPB()+$d);
        $this->setPD($this->getPD()+$d);
    }

    public function mueveAbajo($d){
        $this->setPB($this->getPB()-$d);
        $this->setPD($this->getPD()-$d);
    }

    public function __toString(){
        return 'Punto 1: ('. $this->getPA(). ','. $this->getPB(). ')'."\n". 'Punto 2: ('. $this->getPC(). ','. $this->getPD(). ')'. "\n";
    }
}
?>