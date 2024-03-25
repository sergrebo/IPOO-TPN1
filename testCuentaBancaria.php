<?php
//Ss
include "CuentaBancaria.php";
$p=new CuentaBancaria(5080, 33823405, 10000, 75);
$p->actualizarSaldo();
echo $p."\n";
$p->depositar(5000);
echo $p."\n";
$respuesta=$p->retirar(20000);
echo $respuesta. "\n". $p. "\n";
$respuesta=$p->retirar(10000);
echo $respuesta. "\n". $p. "\n";
?>