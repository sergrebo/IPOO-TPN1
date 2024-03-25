<?php
//sSs
class CuentaBancaria{
    private $numero;
    private $dni;
    private $saldoActual;
    private $interesAnual;

    public function __construct($num, $id, $saldo, $interes){
        $this->numero=$num;
        $this->dni=$id;
        $this->saldoActual=$saldo;
        $this->interesAnual=$interes;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getDni(){
        return $this->dni;
    }

    public function getSaldo(){
        return $this->saldoActual;
    }

    public function getInteres(){
        return $this->interesAnual;
    }

    public function setNumero($nuevoNumero){
        $this->numero=$nuevoNumero;
    }

    public function setDni($nuevoDni){
        $this->dni=$nuevoDni;
    }

    public function setSaldo($nuevoSaldo){
        $this->saldoActual=$nuevoSaldo;
    }

    public function setInteres($nuevoInteres){
        $this->interesAnual=$nuevoInteres;
    }

    public function actualizarSaldo(){
        $this->setSaldo($this->getSaldo()+$this->getSaldo()*$this->getInteres()/365/100);
    }

    public function depositar($cant){
        $this->setSaldo($this->getSaldo()+$cant);
    }

    public function retirar($cant){
        if ($cant>$this->getSaldo()) {
            $rta="Saldo insuficiente. Operación cancelada.";
        } else {
            $this->setSaldo($this->getSaldo()-$cant);
            $rta="Operación exitosa";
        }
        return $rta;
    }

    public function __toString(){
        return "Número de cuenta: ". $this->getNumero(). "\nDNI del cliente: ". $this->getDni(). "\nSaldo actual: $ ". $this->getSaldo(). "\nInteres anual: ". $this->getInteres(). "%\n";
    }
}
?>