<?php

// Obtener los datos del formulario
$state = $_POST['state'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Mapea los estados a las direcciones de correo electrónico correspondientes
$emailAddresses = array(
    'estado1' => 'correo1@example.com',
    'estado2' => 'ortega.cam.vic.92@gmail.com',
    'estado3' => 'correo3@example.com'
    // Agrega más estados y direcciones de correo según tus necesidades
);

// Verifica si el estado seleccionado tiene una dirección de correo asociada
if (array_key_exists($state, $emailAddresses)) {
    $to = $emailAddresses[$state];
    $subject = 'Mensaje de contacto desde el estado ' . $state;
    $messageBody = "Nombre: $name\nCorreo Electrónico: $email\nMensaje: $message";

    // Envía el correo electrónico
    if (mail($to, $subject, $messageBody)) {
        echo '¡Gracias por enviar el formulario!';
    } else {
        echo 'Error: No se pudo enviar el formulario. Por favor, inténtalo de nuevo más tarde.';
    }
} else {
    echo 'Error: No se encontró una dirección de correo para el estado seleccionado.';
}
