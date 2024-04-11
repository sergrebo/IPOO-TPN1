<?php
include 'Libro.php';

$arreglolibros[0]=[
    'isbn'=>9789877251487,
    'titulo'=>'Choque de reyes - Cancion de hielo y fuego',
    'anioDeEdicion'=>2016,
    'editorial'=>'Debolsillo',
    'autor'=>'George R. R. Martin',
];
$arreglolibros[1]=[
    'isbn'=>9789875669062,
    'titulo'=>'Rebelion en la granja',
    'anioDeEdicion'=>2013,
    'editorial'=>'Debolsillo',
    'autor'=>'George Orwell',
];
$arreglolibros[2]=[
    'isbn'=>9789871138517,
    'titulo'=>'Un mundo feliz',
    'anioDeEdicion'=>2010,
    'editorial'=>'Debolsillo',
    'autor'=>'Aldous Huxley',
];
$arreglolibros[3]=[
    'isbn'=>9789874863355,
    'titulo'=>'Teoria general de la ocupacion, el interes y el dinero',
    'anioDeEdicion'=>2023,
    'editorial'=>'Poseidon',
    'autor'=>'John Keynes',
];
$arreglolibros[4]=[
    'isbn'=>9789878010526,
    'titulo'=>'La rebeldia se volvio de derecha?',
    'anioDeEdicion'=>2021,
    'editorial'=>'Siglo veintiuno',
    'autor'=>'Pablo Stefanoni',
];
$arreglolibros[5]=[
    'isbn'=>9789876299008,
    'titulo'=>'Y ahora, que?',
    'anioDeEdicion'=>2019,
    'editorial'=>'Siglo veintiuno',
    'autor'=>'Axel Kicillof',
];

$p=new Libro(9789877254112, 'Dune', 2020, 'Debolsillo', 'Frank Herbert');
$q=new Libro(9789874863324, 'Meditaciones', 2023, 'Poseidon', 'Marco Aurelio');
$r=new Libro(9789878012957, 'Esta entre nosotros', 2023, 'Siglo veintiuno', 'Pablo Seman');

//array_push($arreglolibros, $p, $q);
print_r($arreglolibros);

function iguales($plibro, $parreglo){
    $i=0;
    $rta=false;
    while ($i<count($parreglo)&&!$rta) {
        if ($parreglo[$i]['isbn']==$plibro->getIsbn()) {
            $rta=true;
        }
        $i++;
    }
    return $rta;
}

if (iguales($p, $arreglolibros)) {
    echo 'El libro esta en la coleccion'."\n";
} else {
    echo 'El libro no esta en la coleccion'."\n";
}
if (iguales($r, $arreglolibros)) {
    echo 'El libro esta en la coleccion'."\n";
} else {
    echo 'El libro no esta en la coleccion'."\n";
}
/*
if (iguales($arreglolibros[2], $arreglolibros)) {
    echo 'El libro esta en la coleccion'."\n";
} else {
    echo 'El libro no esta en la coleccion'."\n";
}
*/

function librodeEditoriales($arreglolibros, $peditorial){
    $arregloEditorial=[];
    for ($i=0; $i<count($arreglolibros); $i++) { 
        if (strcmp($arreglolibros[$i]['editorial'], $peditorial)==0) {
            array_push($arregloEditorial, $arreglolibros[$i]);
        }
    }
    return $arregloEditorial;
}
print_r(librodeEditoriales($arreglolibros, 'Debolsillo'));

echo $p;
if ($p->perteneceEditorial('Poseidon')){
    echo 'Verdadero';
} else {
    echo 'Falso';
}
echo $p->aniosdesdeEdicion();
?>