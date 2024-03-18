<?php
//Ss
include "calculadora.php";

$p=new Calculadora(10, 5);
echo $p;

echo "La suma de ambos numeros es: ". sumar()."\nLa resta de ambos numeros es: ". restar()."\nLa multiplicacion de ambos numeros es: ". multiplicar(). "\nLa division de ambos numeros es: ". dividir();
?>