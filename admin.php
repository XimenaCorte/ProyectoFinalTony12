<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
include("conexion.php");

// ELIMINAR
if (isset($_GET['eliminar'])) {
    $id = intval($_GET['eliminar']);
    $sql = "DELETE FROM articulos WHERE id = $id";
    if ($conn->query($sql)) {
        $mensaje = "Articulo eliminado correctamente.";
    } else {
        $error = "Error al eliminar: " . $conn->error;
    }
}

// GUARDAR (INSERTAR)
if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = floatval($_POST['precio']);
    $stock = intval($_POST['stock']);

    $sql = "INSERT INTO articulos (nombre, descripcion, precio, stock) VALUES ('$nombre', '$descripcion', $precio, $stock)";
    if ($conn->query($sql)) {
        $mensaje = "Articulo agregado correctamente.";
    } else {
        $error = "Error al guardar: " . $conn->error;
    }
}

// ACTUALIZAR (EDITAR)
if (isset($_POST['actualizar'])) {
    $id = intval($_POST['id']);
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = floatval($_POST['precio']);
    $stock = intval($_POST['stock']);

    $sql = "UPDATE articulos SET nombre='$nombre', descripcion='$descripcion', precio=$precio, stock=$stock WHERE id=$id";
    if ($conn->query($sql)) {
        $mensaje = "Articulo actualizado correctamente.";
    } else {
        $error = "Error al actualizar: " . $conn->error;
    }
}

// CARGAR DATOS PARA EDITAR
$editando = null;
if (isset($_GET['editar'])) {
    $id = intval($_GET['editar']);
    $result = $conn->query("SELECT * FROM articulos WHERE id = $id");
    $editando = $result->fetch_assoc();
}

// OBTENER TODOS LOS ARTICULOS
$resultado = $conn->query("SELECT * FROM articulos ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo - Papeleria Tony Ximena 12</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f6f9; }
        header { background: #007BFF; color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        header h1 { font-size: 22px; }
        header a { color: white; text-decoration: none; background: #0056b3; padding: 8px 15px; border-radius: 5px; }
        .container { max-width: 1100px; margin: 30px auto; padding: 0 20px; }
        .mensaje { background: #d4edda; color: #155724; padding: 12px; border-radius: 5px; margin-bottom: 20px; }
        .error { background: #f8d7da; color: #721c24; padding: 12px; border-radius: 5px; margin-bottom: 20px; }
        .form-card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-bottom: 30px; }
        .form-card h3 { margin-bottom: 15px; color: #333; }
        .form-row { display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 10px; }
        .form-row input { flex: 1; min-width: 150px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px; }
        .btn { padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 14px; font-weight: bold; color: white; }
        .btn-guardar { background: #28a745; }
        .btn-guardar:hover { background: #218838; }
        .btn-cancelar { background: #6c757d; }
        .btn-cancelar:hover { background: #5a6268; }
        .btn-editar { background: #ffc107; color: #333; padding: 6px 12px; font-size: 13px; }
        .btn-eliminar { background: #dc3545; padding: 6px 12px; font-size: 13px; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        th { background: #343a40; color: white; padding: 12px; text-align: left; }
        td { padding: 10px 12px; border-bottom: 1px solid #eee; }
        tr:hover { background: #f1f1f1; }
        .acciones { display: flex; gap: 5px; }
        .total-registros { margin-bottom: 10px; color: #666; font-size: 14px; }
    </style>
</head>
<body>
    <header>
        <h1>Panel de Administracion - Papeleria Tony</h1>
        <a href="index.php">Volver al Inicio</a>
    </header>

    <div class="container">
        <?php if (isset($mensaje)): ?>
            <div class="mensaje"><?php echo $mensaje; ?></div>
        <?php endif; ?>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <div class="form-card">
            <h3><?php echo $editando ? "Editar Articulo" : "Agregar Articulo"; ?></h3>
            <form method="POST" action="admin.php">
                <?php if ($editando): ?>
                    <input type="hidden" name="id" value="<?php echo $editando['id']; ?>">
                <?php endif; ?>
                <div class="form-row">
                    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $editando ? htmlspecialchars($editando['nombre']) : ''; ?>" required>
                    <input type="text" name="descripcion" placeholder="Descripcion" value="<?php echo $editando ? htmlspecialchars($editando['descripcion']) : ''; ?>" required>
                    <input type="number" step="0.01" name="precio" placeholder="Precio" value="<?php echo $editando ? $editando['precio'] : ''; ?>" required>
                    <input type="number" name="stock" placeholder="Stock" value="<?php echo $editando ? $editando['stock'] : ''; ?>" required>
                </div>
                <button type="submit" name="<?php echo $editando ? 'actualizar' : 'guardar'; ?>" class="btn <?php echo $editando ? 'btn-guardar' : 'btn-guardar'; ?>">
                    <?php echo $editando ? 'Actualizar' : 'Guardar'; ?>
                </button>
                <?php if ($editando): ?>
                    <a href="admin.php" class="btn btn-cancelar">Cancelar</a>
                <?php endif; ?>
            </form>
        </div>

        <p class="total-registros">Total de articulos: <?php echo $resultado->num_rows; ?></p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($row['descripcion']); ?></td>
                    <td>$<?php echo number_format($row['precio'], 2); ?></td>
                    <td><?php echo $row['stock']; ?></td>
                    <td class="acciones">
                        <a href="admin.php?editar=<?php echo $row['id']; ?>" class="btn btn-editar">Editar</a>
                        <a href="admin.php?eliminar=<?php echo $row['id']; ?>" class="btn btn-eliminar" onclick="return confirm('¿Estas seguro de eliminar este articulo? Esta accion no se puede deshacer.');">Eliminar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
