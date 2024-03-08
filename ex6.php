<?php
$elements = [ "Monsieur",
              "Madame",
              "Mademoiselle",
              "Autre"
];
echo afficherInput($elements);  

function afficherInput($elements){
   $resultat = "<select name='element'>";
  foreach($elements as $element) {
    $resultat .= "<option value='$element'>$element</option>";
  }
$resultat .= "</select>" ;
    return $resultat;
}