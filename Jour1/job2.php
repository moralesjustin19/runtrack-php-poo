<?php
class Operation {
    public $nombre1;
    public $nombre2;

    // Constructeur avec valeurs par défaut
    public function __construct($nombre1 = 0, $nombre2 = 0) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    // Méthode pour afficher les attributs
    public function afficher() {
        echo "Nombre1: " . $this->nombre1 . "<br>";
        echo "Nombre2: " . $this->nombre2 . "<br>";
    }

    // Méthode pour additionner nombre1 et nombre2
    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        echo "Résultat de l'addition: " . $resultat . "<br>";
    }
}

// Instanciation de la classe avec des valeurs spécifiques
$operation = new Operation(10, 20);

// Affichage des attributs
$operation->afficher();

// Affichage du résultat de l'addition
$operation->addition();
?>
