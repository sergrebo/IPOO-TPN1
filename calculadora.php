<?php
//Ss
class Calculadora {
    /** Representa una calculadora que permite realizar las operaciones basicas (+, -, * y /)
     * los atributos son: $primerNumero y $segundoNumero que representan los operandos correspondientes
    */
    private $primerNumero;
    private $segundoNumero;

    /** Metodo constructor de la clase calculadora
    * @param FLOAT $a, $b
    */
    public function __construct($a, $b) {
        if (is_numeric($a)&&is_numeric($b)) {
            $this->primerNumero=$a;
            $this->segundoNumero=$b;
        }else{
            throw new ErrorException("El primer y el segundo numero deben tener valores númericos");
        }
        
    }

    /** Metodo get para acceder al primer numero pues el mismo es atributo privado
     * @return FLOAT
     */
    public function getPrimerNumero() {
        return $this->primerNumero;
    }

    /** Metodo get para acceder al segundo numero pues el mismo es atributo privado
     * @return FLOAT
     */
    public function getSegundoNumero() {
        return $this->segundoNumero;
    }

    /** Metodo set para modificar el primer numero pues el mismo es atributo privado
     * @param FLOAT $a
    */
    public function setPrimerNumero($a) {
        $this->primerNumero=$a;
    }

    /** Metodo set para modificar el segundo numero pues el mismo es atributo privado
     * @param FLOAT $b
    */
    public function setSegundoNumero($b) {
        $this->segundoNumero=$b;
    }

    /** Metodo que suma ambos atributos
     * @param FLOAT $a, $b
     * @return FLOAT
     */
    public function sumar($a, $b) {
        //FLOAT $suma
        $suma=$a+$b;
        return $suma;
    }

    /** Metodo que resta ambos atributos
     * @param FLOAT $a, $b
     * @return FLOAT
     */
    public function restar($a, $b) {
        //FLOAT $resta
        $resta=$a-$b;
        return $resta;
    }

    /** Metodo que multiplica ambos atributos
     * @param FLOAT $a, $b
     * @return FLOAT
     */
    public function multiplicar($a, $b) {
        //FLOAT $multiplicacion
        $multiplicacion=$a*$b;
        return $multiplicacion;
    }

    /** Metodo que divide ambos atributos
     * @param FLOAT $a, $b
     * @return FLOAT
     */
    public function dividir($a, $b) {
        //FLOAT $division
        if($b==0){
            echo "El divisor no puede ser cero (0)";
        }else{
            $division=$a/$b;
            return $division;
        }
    }

    /** Metodo __toString que nos permite leer los valores de los atributos como una cadena de caracteres
     * @return STRING
     */
    public function __toString()
    {
        return "El primer numero es: ".$this->getPrimerNumero()."\nEl segundo numero es: ".$this->getSegundoNumero();
    }
}
?>