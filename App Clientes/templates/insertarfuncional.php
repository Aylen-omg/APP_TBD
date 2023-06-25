<?php
include("conectar.php");

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $ciCliente = $_POST["ciCliente"];
  $nombreCliente = $_POST["nombreCliente"];
  $nroHijos = $_POST["nroHijos"];
  $estadoCivil = $_POST["estadoCivil"];
  $correoCliente = $_POST["correoCliente"];
  $tieneTrabajo = $_POST["tieneTrabajo"];
  $direcCliente = $_POST["direcCliente"];

  $codInteres = $_POST["codInteres"];
  $zonaPreferencia = $_POST["zonaPreferencia"];
  $presupuestoCliente = $_POST["presupuestoCliente"];
  $nroHabitacionMax = $_POST["nroHabitacionMax"];
  $nroHabitacionMin = $_POST["nroHabitacionMin"];
  $tienePiscina = $_POST["tienePiscina"];
  $tieneTerraza = $_POST["tieneTerraza"];
  $tieneJardin = $_POST["tieneJardin"];
  $tieneGaraje = $_POST["tieneGaraje"];
  $tienePatio = $_POST["tienePatio"];
  $tieneAscensor = $_POST["tieneAscensor"];
  $permiteMascotas = $_POST["permiteMascotas"];

  $codInteresEsp = $_POST["codInteresEsp"];
  $zonaEspecifica = $_POST["zonaEspecifica"];
  $presupuestoEsp = $_POST["presupuestoEsp"];
  $tienePatioGrande = $_POST["tienePatioGrande"];
  $nroBanosTina = $_POST["nrobanostina"];
  $cantidadAutosGaraje = $_POST["cantidadAutosGaraje"];
  $equipadoElectrodomest = $_POST["equipadoElectrodomest"];

  // Insertar en la tabla CLIENTE
  $query1 = "INSERT INTO CLIENTE (ciCliente, nombreCliente, nroHijos, estadoCivil, correoCliente, tieneTrabajo, direcCliente)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

  $stmt1 = sqlsrv_prepare($con, $query1, array(&$ciCliente, &$nombreCliente, &$nroHijos, &$estadoCivil, &$correoCliente, &$tieneTrabajo, &$direcCliente));

  if (sqlsrv_execute($stmt1)) {
    echo "Se insertó el valor correctamente en la tabla CLIENTE.<br>";
  } else {
    echo "Se produjo un error al insertar en la tabla CLIENTE.<br>";
    echo "Error: " . print_r(sqlsrv_errors(), true) . "<br>";
  }

  // Insertar en la tabla INTERES_PROPIEDAD
  $query2 = "INSERT INTO INTERES_PROPIEDAD (CODINTERES, CICLIENTE, ZONAPREFERENCIA, PRESUPUESTOCLIENTE, NROHABITACIONMIN, NROHABITACIONMAX, TIENEPISCINAP, TIENETERRAZAP, TIENEJARDINP, TIENEGARAJEP, TIENEPATIOP, TIENEASCENSORP, PERMITEMASCOTASP)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt2 = sqlsrv_prepare($con, $query2, array(&$codInteres, &$ciCliente, &$zonaPreferencia, &$presupuestoCliente, &$nroHabitacionMin, &$nroHabitacionMax, &$tienePiscina, &$tieneTerraza, &$tieneJardin, &$tieneGaraje, &$tienePatio, &$tieneAscensor, &$permiteMascotas));

  if (sqlsrv_execute($stmt2)) {
    echo "Se insertó el valor correctamente en la tabla INTERES_PROPIEDAD.<br>";
  } else {
    echo "Se produjo un error al insertar en la tabla INTERES_PROPIEDAD.<br>";
    echo "Error: " . print_r(sqlsrv_errors(), true) . "<br>";
  }

  // Insertar en la tabla INTERES_PROPIEDAD_ESPECIFICO
  $query3 = "INSERT INTO INTERES_PROPIEDAD_ESPECIFICO (CODINTERESESP, CODINTERES, ZONAESPECIFICA, PRESUPUESTOESP, TIENEPATIOGRANDE, NROBAÑOSTINA, CANTIDADAUTOSGARAJE, EQUIPADOELECTRODOMEST)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt3 = sqlsrv_prepare($con, $query3, array(&$codInteresEsp, &$codInteres, &$zonaEspecifica, &$presupuestoEsp, &$tienePatioGrande, &$nroBanosTina, &$cantidadAutosGaraje, &$equipadoElectrodomest));

  if (sqlsrv_execute($stmt3)) {
    echo "Se insertó el valor correctamente en la tabla INTERES_PROPIEDAD_ESPECIFICO.<br>";
  } else {
    echo "Se produjo un error al insertar en la tabla INTERES_PROPIEDAD_ESPECIFICO.<br>";
    echo "Error: " . print_r(sqlsrv_errors(), true) . "<br>";
  }

  // Cerrar la conexión con la base de datos
  sqlsrv_close($con);
} else {
  echo "No se recibieron datos del formulario.";
}
?>
