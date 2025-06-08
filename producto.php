<?php
class Producto {
    private $id;
    private $tipo;
    private $categoria;
    private $peso;

    public function __construct($id, $tipo, $categoria, $peso) {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->categoria = $categoria;
        $this->peso = $peso;
    }

    public function getTipo() { return $this->tipo; }
    public function getCategoria()   { return $this->categoria;   }
}
?>
