<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = strip_tags(trim($_POST["nombre"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = trim($_POST["telefono"]);
    $mes = trim($_POST["mes"]);
    $dia = trim($_POST["dia"]);
    $hora = trim($_POST["hora"]);

    $para = 'litelralph@vrvisions.eu';

    $asunto = "Nueva reserva de $nombre";

    $contenido_email = "Detalles de la Reserva:\n";
    $contenido_email .= "Nombre: $nombre\n";
    $contenido_email .= "Email: $email\n";
    $contenido_email .= "Teléfono: $telefono\n";
    $contenido_email .= "Mes: $mes\n";
    $contenido_email .= "Día: $dia\n";
    $contenido_email .= "Hora: $hora\n";

    $encabezados = "From: $nombre <$email>";

    $success = mail($para, $asunto, $contenido_email, $encabezados);
    if ($success) {
        header('Location: gracias.html');
    } else {
        echo 'Oops! Algo salió mal y no pudimos enviar tu reserva.';
    }
} else {
    http_response_code(403);
    echo "Hubo un problema con tu envío, por favor intenta de nuevo.";
}
?>
