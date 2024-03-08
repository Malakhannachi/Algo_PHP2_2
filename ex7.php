<?php

$elements =["choix1",
           "choix2",
           "choix3"

];

echo genererCheckbox($elements);  
function genererCheckbox($elements){
    $resultat = ""; 
  foreach($elements as $element) {
    $resultat .= "<div>
    <input type='checkbox' id='$element' name='i$element' value='$element' /><label>$element</label>
  </div>";
  } 
    return $resultat;
}