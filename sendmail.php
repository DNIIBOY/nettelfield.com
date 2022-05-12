<?php

    if(isset($_POST['submit'])) {
        echo($_POST['message']
        $mailto = "daniel@nettelfield.com";  // Min mail addresse

        // Hent kundedata
        $name = $_POST['name']; // Hent kundens navn
        $fromEmail = $_POST['email']; // Hent kundens email
        $subject = $_POST['package']; // Hent hvilken pakke de vil have

        $subject2 = "Godkendelse: Din besked er modtaget | Daniel Nettelfield"; // Godkendelse til kunden

        // Email til mig
        // $message = "Navn: " . $name . "\n\n";
        // . "Besked: " . "\n" . $_POST['message'];

        // Email som kunden modtager
        // $message2 = "Dear" . $name . "\n"
        // . "Tak for at kontakte mig! Jeg vil give dig en respons hurtigts muligt." . "\n\n"
        // . "Din besked er følgende:" . "\n" . $_POST['message'] . "\n\n"
        // . "Med venlig hilsen," . "\n" . "Daniel Nettelfield";

        // Email headers
        // $headers = "Fra: " . $fromEmail; // Kunde email, som jeg modtager
        // $headers2 = "Til: " . $mailto; // Email til kunden

        // echo($name, $fromEmail, $subject, $message);

        // PHP mailer function
        // $result1 = mail($mailto, $subject, $message, $headers); // Mail til mig
        // $result2 = mail($fromEmail, $subject2, $message2, $headers2); // Godkendelses mail til kunden

        // Returner on mails blev send ordenligt
        // if ($result1 && $result2) {
        //     $status = "Det funker sku"
        // } else {
        //     $status = "Broken i guess"
        // }
}

?>
