<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nombre"];
    $email = $_POST["email"];
    $message = $_POST["fecha"];

    $to = "alarconsaezalejandro@gmail.com"; 
    $subject = "Nuevo mensaje de $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    echo "Mensaje enviado con éxito";
}
header("Location:index.html")
?>
