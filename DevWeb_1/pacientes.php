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
    <section class="cabeza"> 
    <H1>Hospital Militar</H1>
    <p>Programación II BTPI</p>
    </section>
    
<nav class="nav-bar"> 
    <ul> 
        <li><a href="index.php">Hospital Militar</a></li>
        <li><a href="pacientes.php">Pacientes</a></li>
        <li><a href="citas.php">Citas</a></li>
        <li><a href="especialidades.php">Especialidades</a></li>
        <li><a href="historial_medico.php">Historial Médico</a></li>
        <li><a href="medicos.php">Médicos</a></li>
    </ul>

</nav>
    <div class="container">
        <h1>Form Pacientes</h1>
        <form>
            <div class="form-group">
                <label for="idPaciente">Id Paciente</label>
                <input type="text" id="idPaciente">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre">
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha nacimiento</label>
                <input type="date" id="fechaNacimiento">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" id="direccion">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" id="correo">
            </div>
            <button type="submit" class="btn-enviar">Enviar</button>
        </form>
    </div>
</body>
<footer>
    <p>&copy; 2025 Repaso HTML CSS. Todos los derechos reservados.</p>
    <p>LMH - Programación</p>
    <p> Contacto <a href="mailto:sofiaromerorequeno20@gmail.com">sofiaromerorequeno20@gmail.com</a></p>
</footer>
</html>