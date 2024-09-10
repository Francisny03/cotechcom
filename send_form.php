<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $number = htmlspecialchars($_POST['number']);
    $city = htmlspecialchars($_POST['city']);
    $message = htmlspecialchars($_POST['textarea']);

    $to = "contact@cotechcom.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de contact";
    $body = "Prenom: $prenom\nAdresse mail: $mail\ncity: $city\nNumero de telphone: $number\n\nMessage:\n$message";
    $headers = "From: $mail";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message envoyé avec succès!";
    header('Location: devis.php');
    exit();
} else {
    echo "Erreur lors de l'envoi du message.";
}
    
exit();
}
?>