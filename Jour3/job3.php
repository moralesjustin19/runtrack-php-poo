<?php

class Rectangle {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    public function perimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }

    public function surface() {
        return $this->longueur * $this->largeur;
    }
}

class Parallelepipede extends Rectangle {
    private $hauteur;

    public function __construct($longueur, $largeur, $hauteur) {
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

    public function getHauteur() {
        return $this->hauteur;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    public function volume() {
        return $this->surface() * $this->hauteur;
    }
}

// Instanciation de la classe Rectangle
echo "Rectangle:\n";
$rectangle = new Rectangle(10, 5);
echo "Périmètre: " . $rectangle->perimetre() . "\n";
echo "Surface: " . $rectangle->surface() . "\n\n";

// Instanciation de la classe Parallélépipède
echo "Parallélépipède:\n";
$parallelepipede = new Parallelepipede(10, 5, 8);
echo "Volume: " . $parallelepipede->volume() . "\n";

?>
