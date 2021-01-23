<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


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
    // $statement->execute();    //On l'execute

    
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.ionos.fr';                     // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'toutouille@asciiparait.fr';                     // SMTP username
        $mail->Password   = 'CoinCoin24*';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom($email);
        $mail->addAddress('iufanino@yahoo.com', 'Joe User');     // Add a recipient
        $mail->addReplyTo('iufanino@yahoo.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
       $mail->send();
        

    echo json_encode('{
        "statut": "ok",
        "description": "Message bien envoyé ' . $message.
    '}');

} catch(Exception $exception) {
    //echo $exception->getMessage(); 
    echo json_encode('{
        "statut": "error",
        "description": "Erreur ' . $exception.
        '}');   
}
//echo json_encode($resultats);

