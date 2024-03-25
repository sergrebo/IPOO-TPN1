<?php
class Cafetera{
    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct($cap, $can){
        $this->capacidadMaxima=$cap;
        $this->cantidadActual=$can;
    }

    public function getCap(){
        return $this->capacidadMaxima;
    }

    public function getCan(){
        return $this->cantidadActual;
    }

    public function setCap($nuevaCap){
        $this->capacidadMaxima=$nuevaCap;
    }

    public function setCan($nuevaCan){
        $this->cantidadActual=$nuevaCan;
    }

    public function llenarCafetera(){
        $this->setCan($this->getCap());
    }

    public function servirTaza($capTaza){
        if ($this->getCan()>=$capTaza) {
            $this->setCan($this->getCan()-$capTaza);
            $respuesta='Taza servida'."\n";
        } else {
            $this->vaciarCafetera();
            $respuesta='El cafe no fue suficiente para llenar la taza. Cafetera vacía.'."\n";
        }
        return $respuesta;
    }

    public function vaciarCafetera(){
        $this->setCan(0);
    }

    public function agregarCafe($cantidad){     //Y SI SUPERO LA $capacidad maxima DE LA CAFETERA???
        if ($cantidad>$this->getCap()) {
            $this->setCan($this->getCap());
            $respuesta='Es demasiado cafe. Cafetera completa. Sobro un resto de cafe.'."\n";
        } elseif($cantidad==$this->getCap()) {
            $this->setCan($this->getCap());
            $respuesta='Cafetera completa'."\n";
        } else {
            $this->setCan($this->getCan()+$cantidad);
            $respuesta='Cafetera incompleta'."\n";
        }
        return $respuesta;
    }

    public function __toString(){
        return 'Capacidad maxima de la cafetera: '. $this->getCap(). "\n". 'Cantidad actual de cafe: '. $this->getCan(). "\n";
    }
}
?>