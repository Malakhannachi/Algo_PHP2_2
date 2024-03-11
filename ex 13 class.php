<?php
$v1= new voiture ("Peugeot",5); 
$v2 =new voiture ("Citroën",3);
$v1->demarrer();
$v2->demarrer();
$v1->stopper();
$v2->stopper();
$v1->accelerer(20);
$v2->accelerer(20);
$v2->demarrer();
$v2->accelerer(20);

class Voiture{

    private string $marque; 
    private int $nbPortes;
    private int $vitesseActuelle;
    private bool $etat; 


    public function __construct(string $marque, int $nbPortes, int $vitesseActuelle=0, $etat = false){
        $this ->marque = $marque;
        $this ->nbPortes = $nbPortes;
        $this ->vitesseActuelle= $vitesseActuelle; 
        $this ->etat =$etat;
    }

    public function getMarque(){
        return $this ->marque;
    }
    public function setMarque(string $nom){
        $this ->marque = $marque;
}
    public function getNbportes(){
        return $this ->nbPortes ;
}
    public function setNbportes(int $nbPortes){
    $this ->nbPortes = $nbPortes;
}
    public function getVitesse(){
    return $this ->vitesseActuelle;
}
    public function setVitesse(int $vitesseActuelle){
    $this ->vitesseActuelle = $vitesseActuelle;
}
    public function demarrer(){
      if ($this->etat == false) {
        echo "la voiture"." ". $this ->marque." "."démarre <br>";
          $this->etat = true;

    }else {
        echo "la voiture est déja démarré ";
    }
}
public function stopper(){
    if ($this->etat == false) {
      echo "la voiture"." ". $this ->marque." "."est déjà stoppé <br>";
     

  }else {
      echo "la voiture est  stoppé <br> ";
      $this->etat = false;

  }
}

public function accelerer(int $vitesse ){
    if ($this->etat == false) {
      echo "Pour accélerer, il faut démarrer la voiture "." ". $this ->marque;
     
    }else {
    $this->vitesseActuelle += $vitesse ;
      echo "la voiture veut acceleré "." ".$this->marque .$vitesse;
      
    }
}


}
