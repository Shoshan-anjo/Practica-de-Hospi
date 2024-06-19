<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y sanitizar los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Ruta del archivo donde se almacenarán los datos
    $file = 'form_data.txt';

    // Abrir el archivo para agregar los datos
    $handle = fopen($file, 'a');

    // Formato de los datos a almacenar
    $data = "Nombre: $name\nCorreo Electrónico: $email\nMensaje: $message\n\n";

    // Escribir los datos en el archivo
    fwrite($handle, $data);

    // Cerrar el archivo
    fclose($handle);

    // Responder al usuario
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Formulario Enviado</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <header>
            <h1>Gracias por Contactarnos</h1>
        </header>
        <section>
            <h2>Datos Enviados</h2>
            <p><strong>Nombre:</strong> $name</p>
            <p><strong>Correo Electrónico:</strong> $email</p>
            <p><strong>Mensaje:</strong> $message</p>
        </section>
        <footer>
            <p>&copy; 2024 Hospital. Todos los derechos reservados.</p>
        </footer>
    </body>
    </html>";
} else {
    // Redireccionar al formulario si no se accede por POST
    header("Location: index.php");
    exit();
}
?>
