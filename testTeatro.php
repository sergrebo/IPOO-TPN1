<?php
include 'Teatro.php';
$priFun=[
    'Nombre'=>'Macbeth',
    'Precio'=>3000,
];
$segFun=[
    'Nombre'=>'El mercader de Venecia',
    'Precio'=>'3000',
];
$terFun=[
    'Nombre'=>'Hamlet',
    'Precio'=>'3000',
];
$cuaFun=[
    'Nombre'=>'Fuenteovejuna',
    'Precio'=>'2700',
];
$p=new Teatro('Español', 'Avenida Roca 250', $priFun, $segFun, $terFun, $cuaFun);
echo $p."\n";
$p->setPrimeraFuncion('Un guapo del 900', 2500);
echo $p."\n";
?>