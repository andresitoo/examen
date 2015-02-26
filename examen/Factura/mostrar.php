

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("CollectorFactura.php");
include_once("factura.php");
$FacturaCollectorObj = new CollectorFactura();
$ObjFactura = $FacturaCollectorObj->showFactura($id);
?>

