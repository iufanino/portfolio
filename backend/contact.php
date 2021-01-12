<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Faire comprendre au navigateur ce qu'on lui répond :
header('Access-Control-Allow-Origin: *');

include("db.php");

$nom = $_POST['nom'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$message = $_POST['message'];

$dbcont = new PDO($url, $user, $pass);

// pour afficher les erreurs dans le catch

$dbcont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//On créer une requête sous forme de chaîne de caractère

$rqt = "INSERT INTO utilisateurs (nom, tel, email, message) 
        VALUES (:nom, :tel, :email, :message)"; 

//On prépare notre requête. ça nous renvoie un objet qui est notre requête préparée prête à être executée

try {
    $statement = $dbcont->prepare($rqt);
    $statement->bindParam(':nom', $nom);
    $statement->bindParam(':tel', $tel);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':message', $message);
    $statement->execute();    //On l'execute

    echo json_encode('{
        "statut": "ok",
        "description": "Message bien envoyé ' . $message.
    '}');

} catch(Exception $exception) {
    //echo $exception->getMessage(); 
    echo json_encode('{
        "statut": "error",
        "description": "Erreur ' . $message.
        '}');   
}
//echo json_encode($resultats);