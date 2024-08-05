<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mon_site";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $errors = [];

    // Validation du nom (lettres et espaces uniquement)
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors[] = "Le nom ne doit contenir que des lettres et des espaces.";
    }

    // Validation de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'adresse email n'est pas valide.";
    }

    // Validation du message (caractères alphanumériques, ponctuation et espaces)
    if (!preg_match("/^[a-zA-Z0-9\s.,!?]+$/", $message)) {
        $errors[] = "Le message ne doit contenir que des caractères alphanumériques, des ponctuations et des espaces.";
    }

    if (empty($errors)) {
        try {
            // Créer connexion PDO
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // Configurer PDO pour lancer des exceptions
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Préparer et exécuter la requête SQL
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            $stmt->execute();
            echo "Message envoyé avec succès!";
        } catch(PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }

        // Fermer la connexion
        $conn = null;
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>