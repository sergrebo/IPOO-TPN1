<?php
//Ss
class Reloj {
    private $seg;
    private $min;
    private $hs;
// $p=new Reloj($a, $b, $c)
    public function __construct($a, $b, $c) {
        $this->seg=$a;
        $this->min=$b;
        $this->hs=$c;
    }
    public function getSeg() {
        return $this->seg;
    }
    public function getMin() {
        return $this->min;
    }
    public function getHora() {
        return $this->hs;
    }
    public function setSeg($a) {
        $this->seg=$a;
    }
    public function setMin($b) {
        $this->min=$b;
    }
    public function setHora($c) {
        $this->hs=$c;
    }
    public function __toString() {
        return $this->getHora(). ":". $this->getMin(). ":". $this->getSeg();
    }
    public function puesta_a_cero() {
        $this->setSeg(0); //siempre acceder a atributos a traves de los metodos de acceso como buena practica de programacion
        $this->setMin(0);
        $this->setHora(0);
    }
    public function incremento() {
        /*
        for ($this->getSeg()=0; $this->getSeg()<60 ; $this->setSeg()++) { 
            # code...
        }

        for ($i=0; $i<60; $i++) { 
            if ($i<60) {
                $this->setSeg($i);
            } else {
                $this->setSeg(0);
            }

        for ($h=0; $h<24; $h++) { 
            $this->setHora($h);
            for ($m=0; $m<59; $m++) { 
                $this->setMin($m);
                for ($s=0; $s<59; $s++) { 
                    $this->setSeg($s);
                }
            }
        }

        do {
            # code...
        } while ($a <= 10);

        //23 : 59 : 57
        //23 : 59 : 58
        //23 : 59 : 59
        //0 : 0 : 0
        */

        $segundo=$this->getSeg() + 1;
        $minuto=$this->getMin();
        $hora=$this->getHora();
        if ($segundo>59) {
            $segundo=0;
            $minuto=$minuto+1;
            if ($minuto>59) {
                $minuto=0;
                $hora=$hora+1;
                if ($hora>23) {
                    $hora=0;
                }
            }
        }
        $this->setSeg($segundo);
        $this->setMin($minuto);
        $this->setHora($hora);
        }
    }
?>