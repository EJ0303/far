<?php
require("../Fun.php");

$var_conexion = new funcionesPDO();

// Obtener datos del formulario

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nombre_cliente = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];



// Insertar personas
try {
if ($var_conexion->insertar_cliente($nombre_cliente, $telefono, $email, $direccion )) {
    echo "Usuario registrado correctamente: " . $nombre_cliente;
}
} catch (Exception $e) {
echo "Error al insertar usuario: " . $e->getMessage();
}

}

?>