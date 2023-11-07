<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
</html>

<?php
require_once 'funciones_db.php';
 
// Obtener los datos del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$pais = $_POST['pais'];


// Agregar el nuevo usuario
$resultado = agregarUsuario($nombres, $apellidos, $email, $passwd, $pais);

if ($resultado) {
    echo "<script>alert('Registro guardado correctamente.'); window.location.href = '../contactos.html';</script>";
   
} else {
    echo "<script>alert('Error al agregar el registro.'); window.location.href = '../contactos.html';</script>";
   
}

// Cerrar la conexión
cerrarConexion();
?>