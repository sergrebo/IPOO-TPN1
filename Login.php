<?php
//Ss
class Login {
    private $nombreUsuario;
    private $contrasena;
    private $frase;
    private $arregloContra;
    public function __construct($user, $pass, $phrase, $array){
        $this->nombreUsuario=$user;
        $this->contrasena=$pass;
        $this->frase=$phrase;
        $this->arregloContra=$array;
    }
    public function getNombre(){
        return $this->nombreUsuario;
    }
    public function getContra(){
        return $this->contrasena;
    }
    public function getFrase(){
        return $this->frase;
    }
    public function getArregloContra(){
        return $this->arregloContra;
    }
    public function setNombre($n){
        $this->nombreUsuario=$n;
    }
    public function setContra($c){
        $this->contrasena=$c;
    }
    public function setFrase($f){
        $this->frase=$f;
    }
    public function setArreglo($a){
        $this->arregloContra=$a;
    }
    public function __toString(){//EL PRINT_R LO PONE DONDE QUIERE, TIENE UN COMPORTAMIENTO EXTRAÑO
        return ("Usuario: ". $this->getNombre(). "\nContraseña: ". $this->getContra(). "\nFrase recordatoria: ". $this->getFrase(). "\nHistorial de contraseñas: ".print_r($this->getArregloContra()));
    }
    public function validarContra($contraParaValidar){
        if (!(strcmp($this->getContra(), $contraParaValidar)==0)) {
            echo "Contraseña incorrecta"; //ECHO DENTRO DE UN METODO ES CORRECTO??
        } else {
            echo "Contraseña correcta";
        }
    }
    public function cambiarContra($nuevaContra){
        $ultimasContra=$this->getArregloContra();
        $i=0;
        $control=false;
        do {
            $control=(strcmp($ultimasContra[$i], $nuevaContra)==0);
            /*
            //TEST DEL FUNCIONAMIENTO DE $control
            if ($control) {
                echo "verdadero\n";
            } else {
                echo "falso\n";
            }
            */
            $i=$i+1;
        } while ($i<count($ultimasContra)&&!$control);
        if ($control) {
            echo "Contraseña ya utilizada, debe elegir una distinta a las ultimas 4 utilizadas";
        } else {
            //echo "Contraseña valida"; COMPROBACION DE SALIDA POR ELSE ANTES DE IMPLEMENTAR RENOVACION DEL ARREGLO
            array_unshift($ultimasContra, $nuevaContra);
            array_pop($ultimasContra);
            //print_r($ultimasContra); TEST DE array_unshift() Y array_pop()

            //HACE FALTA INGRESAR UNA NUEVA FRASE RECORDATORIA PARA LA NUEVA CONTRASEÑA???

            $this->setArreglo($ultimasContra);
            $this->setContra($nuevaContra);
        }
    }
    public function recordarContra($usuario){
        if ((strcmp($this->getNombre(), $usuario)==0)) {
            $respuesta=$this->getFrase();
        } else {
            $respuesta="Usuario no registrado";
        }
        return $respuesta;
    }
}
?>