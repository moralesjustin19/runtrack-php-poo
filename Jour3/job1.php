<?php
class Professeur {
    private $matiereEnseignee;

    public function enseigner() {
        echo "Le cours va commencer" ;
    }
}

class Personne {
    private $age;

    public function __construct($age = 14) {
        $this->age = $age;
    }

    public function bonjour() {
        echo "Hello\n";
    }

    public function afficherAge() {
        echo "Age de la personne :" . $this->age . " ans\n";
    }


    public function modifierAge($nouvel_age) {
        if (is_int($nouvel_age) && $nouvel_age >= 0) {
            $this->age = $nouvel_age;
        } else {
            echo "Veuillez entrer un âge valide (entier positif).\n";
        }
    }
}

$personne = new Personne();
$personne->bonjour();
$personne->afficherAge();
$personne->modifierAge(14);

class Eleve extends Personne {
private $age;

    public function allerEnCours() {
        echo "Je vais en cours\n";
    }

    public function __construct($age = 16) {
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
$eleve->modifierAge(16);

?>