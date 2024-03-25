<?php
include 'Cafetera.php';
$p=new Cafetera(2000, 1000);
echo $p."\n";
$p->llenarCafetera();
echo $p."\n";
$rta=$p->servirTaza(500);
echo $p;
echo $rta."\n";
$rta=$p->servirTaza(2000);
echo $p;
echo $rta."\n";
$rta=$p->agregarCafe(2000);
echo $p;
echo $rta."\n";
$p->vaciarCafetera();
echo $p."\n";
?>