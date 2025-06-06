<?php
class Producto {
    private $id;
    private $nombre;
    private $tipo;
    private $peso;

    public function __construct($id, $nombre, $tipo, $peso) {
        $this->id     = $id;
        $this->nombre = $nombre;
        $this->tipo   = $tipo;
        $this->peso   = $peso;
    }

    public function getNombre() { return $this->nombre; }
    public function getTipo()   { return $this->tipo;   }
}
?>
