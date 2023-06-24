<?php
include("conectar.php");

$ciCliente=$_POST["ciCliente"];
$nombreCliente=$_POST["nombreCliente"];
$nroHijos=$_POST["nroHijos"];
$estadoCivil=$_POST["estadoCivil"];
$correoCliente=$_POST["correoCliente"];
$tieneTrabajo=$_POST["tieneTrabajo"];
$direccionCliente=$_POST["direccionCliente"];

$query="INSERT INTO CLIENTE (ciCliente,nombreCliente,nroHijos,estadoCivil,correoCliente,tieneTrabajo,direcCliente) VALUES ($ciCliente,$nombreCliente,$nroHijos,$estadoCivil,$correoCliente,$tieneTrabajo,$direccionCliente)";

$stmt=sqlsrv_prepare($con, $query);

if (sqlsrv_execute($stmt)) {
    echo "Se insertó el valor correctamente.";
} else {
    echo "Se insertó el valor incorrectamente.";
}

// Cerrar la conexión con la base de datos
//sqlsrv_close($con);

?>
