<?php
session_start();

if (isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['usuario'];
    $pass = $_POST['password'];

    if ($user == "22161027@itoaxaca.edu.mx" && $pass == "22161027TSO") {
        $_SESSION['admin'] = true;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Datos Incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Examen 3 Oportunidad TSO JXCO</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 24px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            color: #007BFF;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        .form-group input:focus {
            border-color: #007BFF;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s;
        }
        button:hover {
            background: #0056b3;
        }
        .error-msg {
            color: red;
            text-align: center;
            font-weight: bold;
            margin-top: 15px;
            padding: 10px;
            background: #ffe6e6;
            border-radius: 5px;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }
        .back-link a {
            color: #007BFF;
            text-decoration: none;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">Papeleria Tony</div>
        <h2>Inicio de Sesion</h2>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="usuario">Correo Electronico</label>
                <input type="email" name="usuario" id="usuario" placeholder="Ingresa tu correo" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <button type="submit">Ingresar</button>
        </form>
        <?php if (isset($error)): ?>
            <p class="error-msg"><?php echo $error; ?></p>
        <?php endif; ?>
        <div class="back-link">
            <a href="index.php">Volver al inicio</a>
        </div>
    </div>
</body>
</html>
