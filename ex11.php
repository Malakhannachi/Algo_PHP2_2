<?php
$date = new DateTime("2018-02-23");
echo formaterDateFr ($date);
function formaterDateFr ($date){
    $dateenlettre = IntlDateFormatter::formatObject($date, 'eeee d MMMM Y', 'fr_FR');
    return $dateenlettre;
}
