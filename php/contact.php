<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Send email or save to database
    $to = "contact@ade-encg-oujda.com";
    $subject = "Nouveau message de $name";
    $body = "Nom: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Merci! Votre message a été envoyé.";
    } else {
        echo "Désolé, une erreur s'est produite.";
    }
}
?>