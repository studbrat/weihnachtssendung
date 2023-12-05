<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten holen
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // MailTo
    $to = 'sven.bratschi@stud.fhgr.ch'; //Meine E-mail adresse

   // Betreff
    $subject = 'Neue Nachricht für deine ';

    // Aufbau
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message\n";

    // Start
    $headers = "Von: $name <$email>\r\nReply-To: $email\r\n";

    // Ausgabe
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Wuuhuu deine Nachricht ist abgeschickt! Ich melde mich bald bei dir";
    } else {
        echo "Oops! Da ging was schief, probier es nochmals";
    }
} else {
    echo "Oops! Da ging was schief, probier es später nochmals";
}
?>
