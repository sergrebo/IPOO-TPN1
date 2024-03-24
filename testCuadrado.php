<?php
//Ss
include "Cuadrado.php";
$p1=[1, 1];
$p2=[1, 3];
$p3=[3, 1];
$p4=[3, 3];
$p=new Cuadrado($p1, $p2, $p3, $p4);
echo "El area del cuadrado es ".$p->area(). "\n";
echo $p."\n";
$nuevoPto=[2, 2];
$p->desplazar($nuevoPto);
echo $p."\n";
$p->aumentarTamano(3);
echo $p."\n";
?>