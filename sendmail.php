<?php

    if(isset($_POST["submit"])){

        $mailTo = "daniel@nettelfield.com";  // Min email addresse

        // Hent kundedata
        $name = $_POST["name"];
        $mailFrom = $_POST["email"];
        $package = $_POST["package"];
        $message = $_POST["message"];

        $fullMessage = "Navn: " . $name . "\n"  // Lav hele beskeden der sendes til mig
        . "Mail: " . $mailFrom . "\n"
        . "Valgt pakke: " . $package . "\n\n" 
        . "Besked: " . "\n" . $message;

        // Lav emner
        $subject1 = $name . " vil booke " . $package;

        // Lav email headers
        $header1 = "Fra: " . $mailFrom;  // Kundens mailaddresse til mig

        $result1 = mail($mailTo, $subject1, $fullMessage, $header1);

        if($result1){
            echo("true");
        }
        else{
            echo("false");
        }
    }

?>