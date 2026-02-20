<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Ici tu peux envoyer par email ou stocker dans une DB
    // Exemple simple :
    echo "Merci $name, votre message a été envoyé !";
}
?>
