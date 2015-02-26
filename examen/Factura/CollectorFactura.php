<?php

include_once('factura.php');
include_once('Collector.php');

class CollectorFactura extends Collector
{
  
  function showFactura($id) {
    $row = self::$db->getRows("SELECT * FROM factura where idfactura= ? ", array("{$id}")); 
    $ObjFactura = new factura($row[0]{'idfactura'},$row[0]{'descripcion'},$row[0]{'total'});
    return $ObjFactura;
  }

  function readFacturas() {
   
    $rows = self::$db->getRows("SELECT * FROM factura");        
    $arrayUsuario= array();        
   
    foreach ($rows as $c){
      $aux = new Usuario($c{'idfactura'},$c{'descripcion'},$c{'total'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }