<?php
include 'Conexion.php';

$usuario = $_POST['Usuario'];
$password = $_POST['Contraseña'];

// Modifica la consulta para seleccionar solo el campo 'Tip_Cuenta'
$validar_login = mysqli_query($conexion, "SELECT * FROM login_registro WHERE Usuario = '$usuario' AND Contraseña = '$password'");

if (mysqli_num_rows($validar_login) > 0) {
    $row = mysqli_fetch_assoc($validar_login);
    header("location: ../HTML1/index3.html");

    // Redirige según el tipo de cuenta
} else {
    
    exit;
}
?>