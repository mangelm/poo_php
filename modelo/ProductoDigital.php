<?php

    include_once 'modelo/Producto.php';

    class ProductoDigital extends Producto {
        //No hace falta constructor porque no tiene atributos nuevos    
        public function calculaPrecioFinal() {
            return $this->precio;
        }
    
    }
?>