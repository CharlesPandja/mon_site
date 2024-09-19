<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $objet = htmlspecialchars(trim($_POST['objet']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "pandjacharles@gmail.com";
    $subject = "Nouveau message de votre site web : $objet";
    $body = "Nom: $name\nEmail: $email\nObjet: $objet\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header('Location: index.php?msg=success');
        exit();
    } else {
        header('Location: index.php?msg=error');
        exit();
    }
} else {

    echo "Echec lors de l'envoi du formulaire. Veuillez réessayer plus tard.";
}

?>