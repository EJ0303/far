<?php
require("../Fun.php");

$var_conexion = new funcionesPDO();

// Obtener datos del formulario

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nombre_proveedor = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];  
$email = $_POST['email'];



// Insertar personas
try {
if ($var_conexion->insertar_proveedores($nombre_proveedor, $telefono, $direccion, $email )) {
    echo "Proveedor registrado correctamente: " . $nombre_proveedor;
}
} catch (Exception $e) {
echo "Error al insertar usuario: " . $e->getMessage();
}

}

?>