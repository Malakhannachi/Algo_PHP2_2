<h1>Exercice1</h1>
<h2>Resultat</h2>
<style>
    .red{
        color: red;
    }
</style>

<?php
$texte = "Mon texte en paramètre";
echo convertirtexte($texte);
function convertirtexte($texte){
    $texteMaj = mb_strtoupper($texte);
    $texteMaj = "<p class='red'>$texteMaj</p>";
    return $texteMaj;
}

