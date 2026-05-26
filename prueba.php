<?php
$conn = new mysqli('localhost', 'dev_user', 'x1m3n4', 'tony12');
if ($conn->connect_error) {
    die("Fallo: " . $conn->connect_error);
}
echo "Conexion exitosa";
?>
