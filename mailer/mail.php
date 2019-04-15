<?php 
    // L'INDIRIZZO DEL DESTINATARIO DELLA MAIL 
    $to = "davide.civid.96@gmail.com"; 

    // IL SOGGETTO DELLA MAIL 
    $subject = "Modulo proveniente dal sito www.davidecividini.altervista.org"; 

    // COSTRUIAMO IL CORPO DEL MESSAGGIO 
    $body = "Contenuto del modulo:\n\n"; 
    $body .= "Nome: " . trim(stripslashes($_POST["name"])) . "\n"; 
    $body .= "Email: " . trim(stripslashes($_POST["email"])) . "\n"; 
    $body .= "Messaggio: " . trim(stripslashes($_POST["message"])) . "\n"; 

    // INTESTAZIONI SUPPLEMENTARI 
    $headers = "From: Modulo utenti davidecividini";

    // INVIO DELLA MAIL 
    if (@mail($to, $subject, $body, $headers)) {
        header('Location: ../contacts.html'); 
    } else {
        header('Location: ../contacts.html'); 
    } 
?>