<?php
require("../Fun.php");

$var_conexion = new funcionesPDO();

// Obtener datos del formulario

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nombre = $_POST['nombre'];


// Insertar medicamento
try {
if ($var_conexion->eliminar_proveedor($nombre )) {
    echo "cliente eliminado: " . $nombre;
}
} catch (Exception $e) {
echo "Error al eliminar medicamento: " . $e->getMessage();
}

}

?>