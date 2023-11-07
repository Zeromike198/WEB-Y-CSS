<?php
require_once 'conections.php';


// Agregar un nuevo registro a la tabla usuarios
function agregarUsuario($nombres, $apellidos, $email, $passwd, $pais)
{
    global $conn;
   // Escapar los valores para prevenir inyección SQL
   $nombres = mysqli_real_escape_string($conn, $nombres);
   $apellidos = mysqli_real_escape_string($conn, $apellidos);
   $email = mysqli_real_escape_string($conn, $email);
   $passwd = mysqli_real_escape_string($conn, $passwd);
   $pais = mysqli_real_escape_string($conn, $pais);

   $sql = "INSERT INTO usuarios (nombres, apellidos, email, passwd, pais) VALUES ('$nombres', '$apellidos', '$email', '$passwd', '$pais')";
   return mysqli_query($conn, $sql);
}

// Cerrar la conexión a la base de datos
function cerrarConexion()
{
    global $conn;
    $conn->close();
}
?>