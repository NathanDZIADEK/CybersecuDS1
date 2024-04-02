<?php
echo 'recupConnexion <br />';

//var_dump($_POST);

//$prix = $_POST['prix'];
$nom=filter_input(INPUT_POST,'nom',FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$age=filter_input(INPUT_POST,'age',FILTER_SANITIZE_NUMBER_INT);
$commentaire=filter_input(INPUT_POST,'commentaire',FILTER_SANITIZE_STRING);

    echo "Nom : $nom <br>";
    echo "Email : $email <br>";
    echo "Age : $age <br>";
    echo "Commentaire : $commentaire <br>";
    if (ctype_alpha($nom)) {
        echo "le nom '$nom' est en cours de validation.", '<br>';
    } else {
        echo "le nom '$nom' est vide ou contient des chiffres.", '<br>';
    }
    if (empty($nom)) {
        echo "le nom '$nom' ne peut pas être vide.", '<br>';
    } else {
        echo "le nom '$nom' est entièrement vérifié.", '<br>';
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse mail '$email' est valide.", '<br>';
    } else {
        echo "L'adresse mail '$email' n'est pas valide", '<br>';
    }
    if (is_numeric($age) && $age > 18) {
        echo "l'age '$age' est considéré comme un entier et est supérieur à 18.", '<br>';
    } else {
        echo "l'age '$age' n'est pas considéré comme un entier ou n'est pas supérieur à 18.", '<br>';
    }
    if (empty($commentaire)) {
        echo "le commentaire '$commentaire' n'est pas vide.", '<br>'; 
    } else {
        echo "le commentaire '$commentaire' est vide.", '<br>';
    }
        
    
