<?php
// parametros de conexión
$host = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "hospital"; // asegúrate de que el nombre coincida con tu base de datos

// crear conexión
$conexion = new mysqli($host, $usuario, $clave, $base_datos);

// verificar conexión
if ($conexion->connect_error) {
    die("❌ Error de conexión: " . $conexion->connect_error);
} else {
    echo "✅ Conexión exitosa a la base de datos.";
} 

// cerrar conexión
$conn->close();
?>