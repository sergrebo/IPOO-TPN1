<?php
//Ss
include ("Login.php");
$arregloContrasenas=[
    "gato", "bokita", 5287, 2440
];
$p=new Login("emi", "gato", "Mascota preferida", $arregloContrasenas);
//echo $p;
//$p->validarContra("gato");
//$p->cambiarContra("azucar");
//$respuesta=$p->recordarContra("emi");
$respuesta=$p->recordarContra("chivo");
echo $respuesta;
?>