<?php
class Libro{
    private $isbn;
    private $titulo;
    private $anioDeEdicion;
    private $editorial;
    private $autor;

    public function __construct($isbn, $titulo, $edicion, $editorial, $autor){
        $this->isbn=$isbn;
        $this->titulo=$titulo;
        $this->anioDeEdicion=$edicion;
        $this->editorial=$editorial;
        $this->autor=$autor;
    }

    public function getIsbn(){
        return $this->isbn;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAnioDeEdicion(){
        return $this->anioDeEdicion;
    }
    public function getEditorial(){
        return $this->editorial;
    }
    public function getAutor(){
        return $this->autor;
    }

    public function setIsbn($nuevoIsbn){
        $this->isbn=$nuevoIsbn;
    }
    public function setTitulo($nuevoTitulo){
        $this->titulo=$nuevoTitulo;
    }
    public function setAnioDeEdicion($nuevoAnioDeEdicion){
        $this->anioDeEdicion=$nuevoAnioDeEdicion;
    }
    public function setEditorial($nuevaEditorial){
        $this->editorial=$nuevaEditorial;
    }
    public function setAutor($nuevoAutor){
        $this->autor=$nuevoAutor;
    }

    public function __toString(){
        return 'Libro: "'. $this->getTitulo(). '" de '. $this->getAutor(). "\nISBN: ". $this->getIsbn(). ' - Editorial: '. $this->getEditorial(). ' - Año '. $this->getAnioDeEdicion(). "\n";
    }

    public function perteneceEditorial($peditorial){
        if (!strcmp($this->getEditorial(), $peditorial)==0){
            $rta=false;
        } else {
            $rta=true;
        }
        return $rta;
    }

    public function aniosdesdeEdicion(){
        return "\n".date('Y')-$this->getAnioDeEdicion(). ' años desde que el libro fue editado.'."\n";
    }
}
?>