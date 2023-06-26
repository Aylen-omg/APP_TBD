<!DOCTYPE html>
<html>
<head>

  <title>Registro de Cliente</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-nVtrAKzbeWN6rE1AmBEv24hKbZw1l5K3oPTa2uZiPfOmc1Y7Oev1IGFd3QOpGLydo8EZa2HQwt3A6fJ1LDsoAQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/e34dec443d.js" crossorigin="anonymous"></script>
</head>

<body> 
  
<header>
  <div class="container-hero">
        <div class="container-logo">
          <h1 class="logo"><a href="/">Inmobiliaria Judith&Asociados</a></h1>
        </div>
    </div>
  </header>

  <div class="container">
  <div class="client-forms">
    <form action="pruebaaa1.php" method="post">
      <h2>Registro de Cliente</h2>
      <div class="form-group-container">
        <div class="form-group">
          <label for="ciCliente"><i class="fas fa-id-card"></i> CI Cliente:</label>
          <input type="number" name="ciCliente" required value="">
        </div>
        <div class="form-group">
          <label for="nombreCliente"><i class="fas fa-user"></i> Nombre Cliente:</label>
          <input type="text" name="nombreCliente" required value="">
        </div>
        <div class="form-group">
          <label for="nroHijos"> <i class="fas fa-child"></i> Número de hijos:</label>
          <input type="number" name="nroHijos" required value="">
        </div>
        <div class="form-group">
          <label for="estadoCivil"><i class="fas fa-ring"></i> Estado Civil:</label>
          <input type="text" name="estadoCivil" required value="">
        </div>
        <div class="form-group">
          <label for="correoCliente"> <i class="fas fa-envelope"></i> Correo Electrónico:</label>
          <input type="email" name="correoCliente" required value="">
        </div>
        <div class="form-group">
          <label for="tieneTrabajo"><i class="fas fa-briefcase"></i> ¿Tiene trabajo?</label>
          <input type="text" name="tieneTrabajo" required value="">
        </div>
        <div class="form-group">
          <label for="direccionCliente"> <i class="fas fa-map-marker-alt"></i> Dirección Cliente</label>
          <input type="text" name="direcCliente" required value="">
        </div>
      </div>

      <h2>Requisitos generales</h2>
      <div class="form-group">
        <label for="codInteres"><i class="fas fa-code"></i> Código Interes:</label>
        <input type="text" name="codInteres" required value="">
      </div>
      <div class="form-group">
        <label for="zonaPreferencia"><i class="fas fa-map-marker-alt"></i> Zona de preferencia:</label>
        <input type="text" name="zonaPreferencia" required value="">
      </div>
      <div class="form-group">
        <label for="presupuestoCliente"><i class="fas fa-dollar-sign"></i> Presupuesto del cliente:</label>
        <input type="number" name="presupuestoCliente" required value="">
      </div>
      <div class="form-group">
        <label for="nroHabitacionMax"><i class="fas fa-bed"></i> Nro habitacion max:</label>
        <input type="number" name="nroHabitacionMax" required value="">
      </div>
      <div class="form-group">
        <label for="nroHabitacionMin"><i class="fas fa-bed"></i> Nro habitacion min:</label>
        <input type="number" name="nroHabitacionMin" required value="">
      </div>
      <div class="form-group">
        <label for="tienePiscina"><i class="fas fa-swimming-pool"></i> ¿Tiene piscina?</label>
        <input type="text" name="tienePiscina" required value="">
      </div>
      <div class="form-group">
        <label for="tieneTerraza"><i class="fas fa-sun"></i> ¿Tiene terraza?</label>
        <input type="text" name="tieneTerraza" required value="">
      </div>
      <div class="form-group">
        <label for="tieneJardin"><i class="fas fa-tree"></i> ¿Tiene jardin?</label>
        <input type="text" name="tieneJardin" required value="">
      </div>
      <div class="form-group">
        <label for="tieneGaraje"><i class="fas fa-car"></i> ¿Tiene garaje?</label>
        <input type="text" name="tieneGaraje" required value="">
      </div>
      <div class="form-group">
        <label for="tienePatio"><i class="fas fa-umbrella-beach"></i> ¿Tiene patio?</label>
        <input type="text" name="tienePatio" required value="">
      </div>
      <div class="form-group">
        <label for="tieneAscensor"><i class="fas fa-elevator"></i> ¿Tiene ascensor?</label>
        <input type="text" name="tieneAscensor" required value="">
      </div>
      <div class="form-group">
        <label for="permiteMascotas"><i class="fas fa-paw"></i> ¿Permite mascotas?</label>
        <input type="text" name="permiteMascotas" required value="">
      </div>

      <h2>Requisitos especificos</h2>
      <div class="form-group">
        <label for="codInteresEsp"><i class="fas fa-code"></i> Código Interes Especifico:</label>
        <input type="number" name="codInteresEsp" required value="">
      </div>
      <div class="form-group">
        <label for="zonaEspecifica"><i class="fas fa-map-marker-alt"></i> Zona de especifica preferencia:</label>
        <input type="text" name="zonaEspecifica" required value="">
      </div>
      <div class="form-group">
        <label for="presupuestoEsp"><i class="fas fa-dollar-sign"></i> Presupuesto especifico:</label>
        <input type="number" name="presupuestoEsp" required value="">
      </div>
      <div class="form-group">
        <label for="tienePatioGrande"> <i class="fas fa-umbrella-beach"></i> ¿Tiene patio grande?</label>
        <input type="text" name="tienePatioGrande" required value="">
      </div>
      <div class="form-group">
        <label for="nrobanostina"> <i class="fas fa-bath"></i>  Nro de tinas en banos</label>
        <input type="number" name="nrobanostina" required value="">
      </div>
      <div class="form-group">
        <label for="cantidadAutosGaraje"><i class="fas fa-car"></i> Nro autos para garaje</label>
        <input type="number" name="cantidadAutosGaraje" required value="">
      </div>
      <div class="form-group">
        <label for="equipadoElectrodomest"><i class="fas fa-blender"></i>  Equipado con electrodomesticos:</label>
        <input type="text" name="equipadoElectrodomest" required value="">
      </div>
      <button type="submit" class="submit-btn">Guardar</button>
    </form>
  </div>
</div>

  </div>
</body>
</html>
