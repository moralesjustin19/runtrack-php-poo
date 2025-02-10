<?php

class Forme {
    public function aire() {
        return 0;
    }
}

class Rectangle extends Forme {
    private $largeur;
    private $hauteur;

    public function __construct($largeur, $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function aire() {
        return $this->largeur * $this->hauteur;
    }
}

// Instanciation de la classe Rectangle
echo "Rectangle:\n";
$rectangle = new Rectangle(10, 5);
echo "Aire: " . $rectangle->aire() . "\n";

?>
