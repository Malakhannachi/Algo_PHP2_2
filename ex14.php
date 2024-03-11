<?php
$v1 = new Voiture("Peugeot","408");

echo $v1->getInfos()."<br/>";
class Voiture{

    private string $marque; 
    private string $modéle;

    public function __construct(string $marque, string $modéle){
        $this ->marque = $marque;
        $this ->modéle = $modéle;
       
    }
    public function getInfo(){
        return $this ->marque. $this ->modéle;
}
}