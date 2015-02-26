<?php
$nombre=$_POST['nombre'];
$ruc=$_POST['ruc'];
$cantidGalones=$_POST['cantidad'];
$IVA='12%';

echo "Nombre: ", $nombre." </br>";
echo "Ruc: ", $ruc." </br>";
echo "Cantidad: ", $cantidGalones." </br>";
echo "I.V.A: ", $IVA." </br>";

$precio=2;
$iva=1.2;
$total=$cantidGalones*$precio+$iva;

echo "Total: ", $total." </br>";
?>