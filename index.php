<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria TONY</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; }
        header {
            background: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 { color: #FFD700; font-size: 36px; }
        header p { color: #fff; font-size: 16px; margin-top: 5px; }
        nav { background: #333; padding: 15px; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #FFD700; }
        section { padding: 30px; max-width: 900px; margin: auto; }
        section h2 { color: #007BFF; margin-bottom: 15px; font-size: 24px; }
        section p { color: #555; line-height: 1.6; font-size: 16px; }
        .productos-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 20px; }
        .producto-card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); text-align: center; }
        .producto-card h4 { color: #333; margin-bottom: 8px; }
        .producto-card p { color: #666; font-size: 14px; }
        .mision-vision { display: flex; gap: 30px; margin-top: 20px; flex-wrap: wrap; }
        .mision-vision div { flex: 1; min-width: 250px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .mision-vision h3 { color: #007BFF; margin-bottom: 10px; }
        footer { background: #222; color: white; text-align: center; padding: 15px; margin-top: 30px; }
        .btn-login { display: inline-block; background: #FFD700; color: #333; padding: 12px 30px; border-radius: 5px; text-decoration: none; font-weight: bold; margin-top: 15px; }
        .btn-login:hover { background: #e6c200; }
    </style>
</head>
<body>

<header>
    <h1>PAPELERIA TONY</h1>
    <p>Todo lo que necesitas para tu oficina y escuela</p>
</header>

<nav>
    <a href="#inicio">Inicio</a>
    <a href="#productos">Productos</a>
    <a href="#mision">Mision / Vision</a>
    <a href="login.php">Login</a>
</nav>

<section id="inicio">
    <h2>Bienvenidos</h2>
    <p>Somos una empresa reconocida a nivel nacional dedicada a la venta de articulos de papeleria. Ofrecemos la mejor calidad en productos escolares y de oficina a los mejores precios.</p>
    <a href="login.php" class="btn-login">Acceder al Panel</a>
</section>

<section id="productos">
    <h2>Productos Destacados</h2>
    <p>Contamos con una amplia gama de productos como cuadernos, carpetas, hojas, plumas, lapices y mucho mas.</p>
    <div class="productos-grid">
        <div class="producto-card">
            <h4>Cuadernos</h4>
            <p>Profesionales de 100 hojas, rayas y cuadro chico</p>
        </div>
        <div class="producto-card">
            <h4>Plumas</h4>
            <p>Tinta gel de diversos colores con punta fina</p>
        </div>
        <div class="producto-card">
            <h4>Marcatextos</h4>
            <p>Colores fluorescentes de punta gruesa</p>
        </div>
        <div class="producto-card">
            <h4>Accesorios</h4>
            <p>Gomas, reglas, tijeras, pegamento y mas</p>
        </div>
    </div>
</section>

<section id="mision">
    <h2>Mision y Vision</h2>
    <div class="mision-vision">
        <div>
            <h3>Mision</h3>
            <p>Ofrecer productos de alta calidad al mejor precio para las familias mexicanas, brindando un servicio atento y profesional.</p>
        </div>
        <div>
            <h3>Vision</h3>
            <p>Ser la papeleria numero 1 lider a nivel nacional, reconocida por la variedad de productos y la satisfaccion de nuestros clientes.</p>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2026 Papeleria Tony - Todos los derechos reservados</p>
</footer>

</body>
</html>
