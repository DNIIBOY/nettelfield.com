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

        $confirmMessage = "Hej " . $name  // Lav bekræfelsesbesked
        . "\nTak for din besked, jeg ser frem til at arbejde med dig.\n Din besked er som følger:\n"
        . $message . "\nMed venlig hilsen Daniel Nettelfield\nDenne mail kan ikke besvares, hvis du ønsker at kontakte mig,
        kan du gøre det på " . $mailTo;

        // Lav mail emner
        $subject1 = $name . " vil booke " . $package;
        $subject2 = "Bekræftelse: Din besked er modtaget | Daniel Nettelfield";

        // Lav email headers
        $header1 = "Fra: " . $mailFrom;  // Kundens mailaddresse til mig

        // Send emails
        $result1 = mail($mailTo, $subject1, $fullMessage, $header1);
        $result2 = mail($mailFrom, $subject2, $confirmMessage);

        // Check om mailsne blev sendt
        if($result1 && $result2){
            echo("Success");
        }
        else{
            echo("Fail");
        }
    }

?>