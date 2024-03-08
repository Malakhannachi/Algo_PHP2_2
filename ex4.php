
<?php

$table = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
];
echo afficherTableHTML($table);  
function afficherTableHTML($table){
    ksort($table);
   $resultat =" <table border=1>
   <thead>
       <tr>
        <th>Pays</th>
        <th>Capitale</th>
        <th>lien Wiki</th>
       </tr>
    </thead>
    <tbody>" ;
    foreach ($table as $pays => $capitale) {
        $resultat .=" <tr>
        <td>".$pays."</td>
        <td>".$capitale."</td>
        <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Wiki</a></td>
    </tr>";
    }
    $resultat .="</tbody></table>";
    return $resultat;

}