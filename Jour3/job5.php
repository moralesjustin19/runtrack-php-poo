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

class Cercle extends Forme {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function aire() {
        return pi() * pow($this->radius, 2);
    }
}

// Instanciation des classes et affichage des résultats
echo "Rectangle:\n";
$rectangle = new Rectangle(10, 5);
echo "Aire: " . $rectangle->aire() . "\n";

echo "Cercle:\n";
$cercle = new Cercle(7);
echo "Aire: " . $cercle->aire() . "\n";

?>
