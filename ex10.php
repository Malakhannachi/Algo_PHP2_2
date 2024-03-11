
<?php
$informations = ["nom",
                 "prenom",
                 "adresse e-mail",
                 "ville",
                 "sexe"
];
$listedeformations = ["Développeur Logiciel",
                      "Designer web " ,
                      " Intégrateur",
                      " Chef de projet" 
];

echo afficherInput($informations);  

function afficherInput($informations){
   
    $resultat = "";
    foreach ($informations as $element ) {
        $resultat .= "<label for='$element'>$element :</label><br>

      <input type='text' id='$element' name='$element' /><br>";
    }
    return $resultat;
}
echo afficherInput2($listedeformations);  

function afficherInput2($listedeformations){
   $resultat2 = "<select name='formation'>";
  foreach($listedeformations as $formations) {
    $resultat2 .= "<option value='$formations'>$formations</option><br>";
  }
$resultat2 .= "</select>" ;
    return $resultat2;
}
$bouton = "<br> <input type='submit' value ='envoyer'>";
echo ($bouton);

