<?php
//Ss
/*
$mesesDias[1]=["mes"=>"Enero", "dias"=>31];
$mesesDias[2]=["mes"=>"Febrero", "dias"=>28];
$mesesDias[3]=["mes"=>"Marzo", "dias"=>31];
$mesesDias[4]=["mes"=>"Abril", "dias"=>30];
$mesesDias[5]=["mes"=>"Mayo", "dias"=>31];
$mesesDias[6]=["mes"=>"Junio", "dias"=>30];
$mesesDias[7]=["mes"=>"Julio", "dias"=>31];
$mesesDias[8]=["mes"=>"Agosto", "dias"=>31];
$mesesDias[9]=["mes"=>"Septiembre", "dias"=>30];
$mesesDias[10]=["mes"=>"Octubre", "dias"=>31];
$mesesDias[11]=["mes"=>"Noviembre", "dias"=>30];
$mesesDias[12]=["mes"=>"Diciembre", "dias"=>31];
*/

class Fecha {
    private $dd;
    private $mm;
    private $aa;

    public function __construct($dia, $mes, $ano) {
        $this->dd=$dia;
        $this->mm=$mes;
        $this->aa=$ano;
    }
    public function getDia() {
        return $this->dd;
    }
    public function getMes() {
        return $this->mm;
    }
    public function getAno() {
        return $this->aa;
    }
    public function setDia($dia) {
        $this->dd=$dia;
    }
    public function setMes($mes) {
        $this->mm=$mes;
    }
    public function setAno($ano) {
        $this->aa=$ano;
    }
    public function cargarArreglo() {
        $mesesDias[1]=["mes"=>"Enero", "dias"=>31];
        $mesesDias[2]=["mes"=>"Febrero", "dias"=>28];
        $mesesDias[3]=["mes"=>"Marzo", "dias"=>31];
        $mesesDias[4]=["mes"=>"Abril", "dias"=>30];
        $mesesDias[5]=["mes"=>"Mayo", "dias"=>31];
        $mesesDias[6]=["mes"=>"Junio", "dias"=>30];
        $mesesDias[7]=["mes"=>"Julio", "dias"=>31];
        $mesesDias[8]=["mes"=>"Agosto", "dias"=>31];
        $mesesDias[9]=["mes"=>"Septiembre", "dias"=>30];
        $mesesDias[10]=["mes"=>"Octubre", "dias"=>31];
        $mesesDias[11]=["mes"=>"Noviembre", "dias"=>30];
        $mesesDias[12]=["mes"=>"Diciembre", "dias"=>31];
        return $mesesDias;
    }
    public function escribirFecha() {
        $arreglo=$this->cargarArreglo();
        return ($this->getDia()." de ".$arreglo[$this->getMes()]["mes"]." de ".$this->getAno());
    }
    public function __toString() {
    return ($this->getDia()."/".$this->getMes()."/".$this->getAno()."\n".$this->escribirFecha());
    }
    public function incremento($entero, $dia, $mes, $ano) {
        $this->setDia($dia);
        $this->setMes($mes);
        $this->setAno($ano);
        for ($i=0; $i<=$entero; $i++) { 
            $this->incrementa_un_dia();
            echo $this->getDia()."/".$this->getMes()."/".$this->getAno()."\n";
        }
    }
    public function incrementa_un_dia() {
        $arreglo=$this->cargarArreglo();
        $dia=$this->getDia();
        $mes=$this->getMes();
        $ano=$this->getAno();
        $esBisiesto=($ano%4==0)&&((!$ano%100==0)||($ano%400==0));
        /*if ($esBisiesto) {
            echo "verdadero\n";
        }else {
            echo "falso\n";
        }*/
        $dia=$dia+1;
        if ($dia>$arreglo[$mes]["dias"]) {
            if ($mes==2&&$esBisiesto&&$dia==28) {
                $dia=29;
            } elseif ($mes==2&&$esBisiesto&&$dia==29) {
                $dia=1;
                $mes=3;
            } else {
                $dia=1;
                $mes=$mes+1;
            }
        }
        if ($mes>12) {
            $mes=1;
            $ano=$ano+1;
        }
        $this->setDia($dia);
        $this->setMes($mes);
        $this->setAno($ano);
    }
}

?>