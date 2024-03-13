<?php
$emails = [
    "elan@elan-formation.fr",
    "contact@elan"
];
foreach ($emails as $emails ) {
    $resultat = filter_var($emails, FILTER_VALIDATE_EMAIL);
    if ($resultat==true) {
       echo"L'adresse $emails est une adresse e-mail valide <br>";
    }
    else {
        echo "L'adresse $emails est une adresse e-mail invalide <br>";
    }
}
