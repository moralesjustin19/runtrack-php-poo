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
}

// Instanciation de la classe avec les valeurs par défaut
$operation = new Operation();

// Affichage des attributs
$operation->afficher();
?>