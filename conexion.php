<?php
$conn = new mysqli('localhost', 'dev_user', 'x1m3n4', 'tony12');

if ($conn->connect_error) {
    die("Error de conexion: " . $conn->connect_error);
}
?>
