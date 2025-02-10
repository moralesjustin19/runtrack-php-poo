<?php
class Professeur {
    private $matiereEnseignee;

    public function direBonjour() {
        echo "Bonjour a tous" ;
    }

    public function enseigner() {
        echo "Le cours va commencer" ;
    }
}

$Professeur = new Professeur();
$Professeur->direBonjour();
$Professeur->enseigner();

class Eleve {
    private $age;

    public function bonjour() {
        echo"Bonjour monsieur";
    }

    public function allerEnCours() {
        echo "Je vais en cours\n";
    }

    public function __construct($age = 15) {
        $this->age = $age; 
    }

    public function afficherAge() {
        echo "J’ai " . $this->age . " ans\n";
    }

}


$eleve = new Eleve();
$eleve->bonjour();
$eleve->afficherAge();
$eleve->allerEnCours();
?>