<?php
//Ss
include "calculadora.php";

$p=new Calculadora(10, 5);
echo "\n".$p;
echo "La suma de ambos numeros es: ". $p->sumar()."\nLa resta de ambos numeros es: ". $p->restar()."\nLa multiplicacion de ambos numeros es: ". $p->multiplicar(). "\nLa division de ambos numeros es: ". $p->dividir(). "\n";

$r=new Calculadora(2, 0);
echo "\n".$r;
echo "La suma de ambos numeros es: ". $r->sumar()."\nLa resta de ambos numeros es: ". $r->restar()."\nLa multiplicacion de ambos numeros es: ". $r->multiplicar(). "\nLa division de ambos numeros es: ". $r->dividir(). "\n";

$s=new Calculadora("a", 3);
echo "\n".$s;

?>