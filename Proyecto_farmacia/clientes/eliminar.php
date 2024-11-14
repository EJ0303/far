<?php
require("../Fun.php");

$var_conexion = new funcionesPDO();

// Obtener datos del formulario

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$id = $_POST['id'];


// Insertar medicamento
try {
if ($var_conexion->eliminar_cliente($id )) {
    echo "cliente eliminado: " . $id;
}
} catch (Exception $e) {
echo "Error al eliminar medicamento: " . $e->getMessage();
}

}

?>