<?php
$v1 = new Voiture("Peugeot","408");
$v2 = new VoitureElec ("BMW","I3",100);

echo $v1->getInfos()."<br/>";
echo $v2->getInfos()."<br/>";

class Voiture{

    protected string $marque; 
    protected string $modéle;

    public function __construct(string $marque, string $modéle){
        $this ->marque = $marque;
        $this ->modéle = $modéle;
       
    }
    public function getInfos(){
        return $this ->marque. $this ->modéle;
}
}
class VoitureElec extends Voiture{

    private int $batterie;

    public function __construct(string $marque, string $modéle,  int $batterie ){
       
        parent::__construct( $marque,  $modéle);
        $this ->batterie = $batterie ;
    }
    public function getInfos(){
        return $this ->marque. $this ->modéle.$this->batterie;
    }
}

