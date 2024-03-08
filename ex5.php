<h1>Exercice5</h1>

<?php
$nomsInput = [ "Nom",
              "Prenom",
              "Ville",
              "Email"
];
echo afficherInput($nomsInput);  

function afficherInput($nomsInput){
   
    $resultat = "";
    foreach ($nomsInput as $element ) {
        $resultat .= "<label for='$element'>$element :</label>

      <input type='text' id='$element' name='$element' />";
    }
    return $resultat;
}