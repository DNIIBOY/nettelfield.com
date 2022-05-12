<?php

    if(isset($_POST["submit"])){

        $mailTo = "daniel@nettelfield.com";  // Min email addresse

        // Hent kundedata
        $name = $_POST["name"];
        $fromEmail = $_POST["email"];
        $subject = $_POST["package"];
        $message = $_POST["message"];

        $fullMessage = "Navn: " . $name . "\n"
        . "Bruger email: " . $fromEmail . "\n"
        . "\n\n" . "Besked: " . "\n" . $message;
        echo($fullMessage);
    }

?>