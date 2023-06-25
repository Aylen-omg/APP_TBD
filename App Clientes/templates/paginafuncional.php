<!DOCTYPE html>
<html>
<head>
  <title>Registro de Cliente</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
  
</head>

<body>
  <header>
  <div class="container-hero">
    <div class="container hero">
      <div class="customer-support">
        <i class="fa-solid fa-headset"></i>
      </div>
      <div class="container-logo">
        <i class="fa-solid fa-mug-hot"></i>
        <h1 class="logo"><a href="/">Inmobiliaria Casa Ideal</a></h1>
      </div>
    </div>
  </div>
  </header>
  <div class="tab-content">
    <form action="pruebaaa1.php" method="post">
        <h2>Registro de Cliente</h2>
        <div class="form-group">
          <label for="ciCliente">CI Cliente:</label>
          <input type="number" name="ciCliente" required value="">
        </div>
        <div class="form-group">
          <label for="nombreCliente">Nombre Cliente:</label>
          <input type="text" name="nombreCliente" required value="">
        </div>
        <div class="form-group">
          <label for="nroHijos">Número de hijos:</label>
          <input type="number" name="nroHijos" required value="">
        </div>
        <div class="form-group">
          <label for="estadoCivil">Estado Civil:</label>
          <input type="text" name="estadoCivil" required value="">
        </div>
        <div class="form-group">
          <label for="correoCliente">Correo Electrónico:</label>
          <input type="email" name="correoCliente" required value="">
        </div>
        <div class="form-group">
          <label for="tieneTrabajo">¿Tiene trabajo?</label>
          <input type="text" name="tieneTrabajo" required value="">
        </div>
        <div class="form-group">
          <label for="direccionCliente">Dirección Cliente</label>
          <input type="text" name="direcCliente" required value="">
        </div>
      

      <h2>Requisitos generales</h2>
      <div class="form-group">
        <label for="codInteres">Codigo Interes:</label>
        <input type="text" name="codInteres" required value="">
      </div>
      <div class="form-group">
        <label for="zonaPreferencia">Zona de preferencia:</label>
        <input type="text" name="zonaPreferencia" required value="">
      </div>
      <div class="form-group">
        <label for="presupuestoCliente">Presupuesto del cliente:</label>
        <input type="number" name="presupuestoCliente" required value="">
      </div>
      <div class="form-group">
        <label for="nroHabitacionMax">Nro habitacion max:</label>
        <input type="number" name="nroHabitacionMax" required value="">
      </div>
      <div class="form-group">
        <label for="nroHabitacionMin">Nro habitacion min:</label>
        <input type="number" name="nroHabitacionMin" required value="">
      </div>
      <div class="form-group">
        <label for="tienePiscina">¿Tiene piscina?</label>
        <input type="text" name="tienePiscina" required value="">
      </div>
      <div class="form-group">
        <label for="tieneTerraza">¿Tiene terraza?</label>
        <input type="text" name="tieneTerraza" required value="">
      </div>
      <div class="form-group">
        <label for="tieneJardin">¿Tiene jardin?</label>
        <input type="text" name="tieneJardin" required value="">
      </div>
      <div class="form-group">
        <label for="tieneGaraje">¿Tiene garaje?</label>
        <input type="text" name="tieneGaraje" required value="">
      </div>
      <div class="form-group">
        <label for="tienePatio">¿Tiene patio?</label>
        <input type="text" name="tienePatio" required value="">
      </div>
      <div class="form-group">
        <label for="tieneAscensor">¿Tiene ascensor?</label>
        <input type="text" name="tieneAscensor" required value="">
      </div>
      <div class="form-group">
        <label for="permiteMascotas">¿Permite mascotas?</label>
        <input type="text" name="permiteMascotas" required value="">
      </div>

      <h2>Requisitos especificos</h2>
      <div class="form-group">
        <label for="codInteresEsp">Codigo Interes Especifico:</label>
        <input type="number" name="codInteresEsp" required value="">
      </div>
      <div class="form-group">
        <label for="zonaEspecifica">Zona de especifica preferencia:</label>
        <input type="text" name="zonaEspecifica" required value="">
      </div>
      <div class="form-group">
        <label for="presupuestoEsp">Presupuesto especifico:</label>
        <input type="number" name="presupuestoEsp" required value="">
      </div>
      <div class="form-group">
        <label for="tienePatioGrande">¿Tiene patio grande?</label>
        <input type="text" name="tienePatioGrande" required value="">
      </div>
      <div class="form-group">
        <label for="nrobanostina">Nro de tinas en banos</label>
        <input type="number" name="nrobanostina" required value="">
      </div>
      <div class="form-group">
        <label for="cantidadAutosGaraje">Nro autos para garaje</label>
        <input type="number" name="cantidadAutosGaraje" required value="">
      </div>
      <div class="form-group">
        <label for="equipadoElectrodomest">Equipado con electrodomesticos:</label>
        <input type="text" name="equipadoElectrodomest" required value="">
      </div>
      <button type="submit" class="submit-btn">Guardar</button>
 
  </form>

  </div>
</body>
</html>

