<?php
$nomsRadio =["Monsieur",
           "Madame",
            "Mademoiselle",

];

echo afficherRadio($nomsRadio);  
function afficherRadio($nomsRadio){
$resultat = ""; 
foreach($nomsRadio as $nom) {
$resultat .= "<div>
<input type='button'  /><label>$nom</label>
</div>";
} 
return $resultat;
}
