<h1>Exercice 2</h1>
<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
<h2>Resultat</h2>


<?php
$table = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
];
echo afficherTableHTML($table);  

function afficherTableHTML($table){
    krsort($table);
   $resultat =" <table border=1>
   <thead>
       <tr>
        <th>Pays</th>
        <th>Capitale</th>
       </tr>
    </thead>
    <tbody>" ;
    foreach ($table as $pays => $capitale) {
        $resultat .=" <tr>
        <td>".mb_strtoupper($pays)."</td>
        <td>".$capitale."</td>
    </tr>";
    }
    $resultat .="</tbody></table>";
    return $resultat;

}


