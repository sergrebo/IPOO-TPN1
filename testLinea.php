<?php
include 'Linea.php';
$p=new Linea(0, 1, 5, 1);
echo $p."\n";
$p->mueveDerecha(2);
echo $p."\n";
$p->mueveIzquierda(2);
echo $p."\n";
$p->mueveArriba(2);
echo $p."\n";
$p->mueveAbajo(2);
echo $p."\n";
?>