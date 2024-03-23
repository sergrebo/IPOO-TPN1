<?php
//Ss
include "Fecha.php";
/*
$mesesDias[1]=["mes"=>"Enero", "dias"=>31];
$mesesDias[2]=["mes"=>"Febrero", "dias"=>28];
$mesesDias[3]=["mes"=>"Marzo", "dias"=>31];
$mesesDias[4]=["mes"=>"Abril", "dias"=>30];
$mesesDias[5]=["mes"=>"Mayo", "dias"=>31];
$mesesDias[6]=["mes"=>"Junio", "dias"=>30];
$mesesDias[7]=["mes"=>"Julio", "dias"=>31];
$mesesDias[8]=["mes"=>"Agosto", "dias"=>31];
$mesesDias[9]=["mes"=>"Septiembre", "dias"=>30];
$mesesDias[10]=["mes"=>"Octubre", "dias"=>31];
$mesesDias[11]=["mes"=>"Noviembre", "dias"=>30];
$mesesDias[12]=["mes"=>"Diciembre", "dias"=>31];
*/
/*
echo $p."\n";*/
$p=new Fecha(16, 2, 2000);
$p->incremento(20, 16, 2, 2000);
?>