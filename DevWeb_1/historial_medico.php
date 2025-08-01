<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Militar</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <header class="cabeza">
    <h1>Hospital Militar</h1>
    <p>Programación II | 12 BTP - Informática</p>
  </header>

  <nav class="nav-bar">
    <ul> 
        <li><a href="index.php">Inicio</a></li>
        <li><a href="pacientes.php">Pacientes</a></li>
        <li><a href="citas.php">Citas</a></li>
        <li><a href="especialidades.php">Especialidades</a></li>
        <li><a href="historial_medico.php">Historial Médico</a></li>
        <li><a href="medicos.php">Médicos</a></li>
    </ul>
  </nav>

  <main class="formulario">
    <h2>Registro de Médicos</h2>
    <form method="post" action="conexion.php">
      <div class="form-group">
        <label for="nombre">Nombre Completo</label>
        <input type="text" id="nombre" required />
      </div>

      <div class="form-group">
        <label for="especialidad">Especialidad</label>
        <input type="text" id="especialidad" required />
      </div>

      <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" required />
      </div>

      <div class="form-group">
        <label for="correo">Correo Electrónico</label>
        <input type="email" id="correo" required />
      </div>

      <div class="form-group">
        <label for="horario">Horario de Atención</label>
        <input type="text" id="horario" placeholder="Ej. Lunes a Viernes de 8am a 4pm" />
      </div>

      <button type="submit" class="btn-enviar">Registrar Médico</button>
    </form>
  </main>
</body>
<footer>
    <p>&copy; 2025 Repaso HTML CSS. Todos los derechos reservados.</p>
    <p>LMH - Programación</p>
    <p> Contacto <a href="mailto:sofiaromerorequeno20@gmail.com">sofiaromerorequeno20@gmail.com</a></p>
</footer>
</html>