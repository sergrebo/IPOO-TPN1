<?php
include "reloj.php";
$p=new Reloj(0, 0, 0);
for ($i=0; $i<3602; $i++) { 
    $p->incremento();
    echo $p."\n";
}
?>