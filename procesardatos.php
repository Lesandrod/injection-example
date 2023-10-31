<?php
include_once 'conn.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contra='$contrasena'";
$resultado = $MySQLiconn->query($sql);

if ($resultado) {
    if ($resultado->num_rows > 0) {
        header("location:home.php");
    } else {
        header("Location:index.php?errorusuario=si");
    }
} else {
    echo "Error en la consulta SQL: " . $MySQLiconn->error;
}

$MySQLiconn->close();
?>
