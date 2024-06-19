<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bienvenidos al Hospital</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>
    <section id="inicio">
        <h2>Inicio</h2>
        <img src="images/hospital.jpg" alt="Hospital" width="350" height="350">
        <p>Bienvenido al hospital, donde nos preocupamos por su salud.</p>
    </section>
    <section id="servicios">
        <h2>Servicios</h2>
        <img src="images/doctor.jpg" alt="Doctor" width="350" height="350">
        <p>Ofrecemos una amplia gama de servicios médicos.</p>
    </section>
    <section id="contacto">
        <h2>Contacto</h2>
        <form id="contactForm" action="process_form.php" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2024 Hospital. Todos los derechos reservados.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
