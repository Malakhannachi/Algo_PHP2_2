<?php
$tableauValeurs=[true,
                 "texte",
                 10,
                 25.369, 
                 ["valeur1","valeur2"]
];

foreach ($tableauValeurs as $element => $value) {
    $resultat = var_dump($tableauValeurs)."<br>";
    return($resultat ."<br>");
}