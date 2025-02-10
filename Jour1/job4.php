<?php
class Point {
    private $x;
    private $y;

    // Constructeur pour initialiser x et y
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour afficher les coordonnées du point
    public function afficherLesPoints() {
        echo "Coordonnées du point: (" . $this->x . ", " . $this->y . ")<br>";
    }

    // Méthode pour afficher la valeur de x
    public function afficherX() {
        echo "Valeur de x: " . $this->x . "<br>";
    }

    // Méthode pour afficher la valeur de y
    public function afficherY() {
        echo "Valeur de y: " . $this->y . "<br>";
    }

    // Méthode pour changer la valeur de x
    public function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    // Méthode pour changer la valeur de y
    public function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

// Création d'une instance de Point
$point = new Point(5, 10);

// Affichage des coordonnées initiales
$point->afficherLesPoints();

// Modification des valeurs de x et y
$point->changerX(20);
$point->changerY(30);

// Affichage des nouvelles coordonnées
$point->afficherLesPoints();

// Affichage individuelle de x et y
$point->afficherX();
$point->afficherY();
?>
