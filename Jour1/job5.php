<?php
class Animal {
    public $age;
    public $prenom;

    // Constructeur qui initialise age à 0 et prenom à une chaîne vide
    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    // Méthode pour afficher l'âge de l'animal
    public function afficherAge() {
        echo "L'âge de l'animal est : " . $this->age . " an(s).<br>";
    }

    // Méthode pour faire vieillir l'animal
    public function vieillir() {
        $this->age += 1;
    }

    // Méthode pour nommer l'animal
    public function nommer($nom) {
        $this->prenom = $nom;
    }

    // Méthode pour afficher le nom de l'animal
    public function afficherNom() {
        echo "Le nom de l'animal est : " . $this->prenom . "<br>";
    }
}

// Instanciation d'un objet Animal
$monAnimal = new Animal();

// Affichage de l'âge initial
$monAnimal->afficherAge();

// Faire vieillir l'animal d'un an
$monAnimal->vieillir();

// Affichage de l'âge après vieillissement
$monAnimal->afficherAge();

// Nommer l'animal
$monAnimal->nommer("Rex");

// Affichage du nom de l'animal
$monAnimal->afficherNom();
?>
