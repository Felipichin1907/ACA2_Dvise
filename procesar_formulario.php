<?php 
$user="root";
$pass="password";
$server="localhost";
$db="usuarios";

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$empresa=$_POST['empresa'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];


$mysqli = new mysqli($server,$user,$pass,$db);

$sql = "INSERT INTO usuarios (nombre, apellido, email, empresa, telefono, mensaje)
        VALUES ('$nombre', '$apellido', '$email', '$empresa', '$telefono', '$mensaje')";

if ($mysqli->query($sql) === TRUE) {
    echo "Datos guardados correctamente.";
} else {
    echo "Error al guardar los datos: " . $mysqli->error;
}
$mysqli->close();
?>