<?php
mail("daniel@nettelfield.com", "Test part 41", "hejsa altså", "header dims i guess")

<!--     if(isset($_POST['submit'])) { -->

<!--         $mailto = "daniel@nettelfield.com";  // Min mail addresse -->

<!--         // Hent kundedata -->
<!--         $name = $_POST['name']; // Hent kundens navn -->
<!--         $fromEmail = $_POST['email']; // Hent kundens email -->
<!--         $subject = $_POST['package']; // Hent hvilken pakke de vil have -->

<!--         $subject2 = "Godkendelse: Din besked er modtaget | Daniel Nettelfield"; // Godkendelse til kunden -->

<!--         // Email til mig -->
<!--         $message = "Navn: " . $name . "\n\n" -->
<!--         . "Besked: " . "\n" . $_POST['message']; -->

<!--         // Email som kunden modtager -->
<!--         $message2 = "Dear" . $name . "\n" -->
<!--         . "Tak for at kontakte mig! Jeg vil give dig en respons hurtigts muligt." . "\n\n" -->
<!--         . "Din besked er følgende:" . "\n" . $_POST['message'] . "\n\n" -->
<!--         . "Med venlig hilsen," . "\n" . "Daniel Nettelfield"; -->

<!--         // Email headers -->
<!--         $headers = "Fra: " . $fromEmail; // Kunde email, som jeg modtager -->
<!--         $headers2 = "Til: " . $mailto; // Email til kunden -->

<!--         //PHP mailer function -->

<!--         $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address -->
<!--         $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client -->

<!--         //Checking if Mails sent successfully -->

<!--         if ($result1 && $result2) { -->
<!--             echo("<p>Det funker sku</p>") -->
<!--         } else { -->
<!--             echo("<p>Broken i guess</p>") -->
<!--         } -->

}

?>
