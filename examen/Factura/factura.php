<?php

class factura
{
    private $idfactura;
    private $descripcion;
    private $total;

    
     function __construct($idfactura, $descripcion, $total) {
       $this->idfactura = $idfactura;
       $this->descripcion = $descripcion;
       $this->total = $total;
     }
    
     function setIdFactura($idfactura){
       $this->idfactura = $idfactura;
     } 
     function getIdFactura(){
       return $this->idfactura;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
     function setTotal($total){
       $this->total = $total;
     } 
     function getTotal(){
       return $this->total;
     } 
}

?> 
