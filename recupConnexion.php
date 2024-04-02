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
        echo "le nom n'est pas vide et ne contient que des lettres.", '<br>';
    } else {
        echo "le nom est vide et ne contient pas que des lettres.", '<br>';
    }
    if (empty($nom)) {
        echo "veuillez écrire le nom attendu.", '<br>';
    } 
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse mail '$email' est valide.", '<br>';
    }
    if (is_numeric($age)) {
        echo "l'age '$age' est considéré comme un entier.", '<br>';
    }
    if (strlen($age)<18) {
        echo "l'age '$age' est supérieur ou égal à 18 ans.", '<br>';
    }
        
    
