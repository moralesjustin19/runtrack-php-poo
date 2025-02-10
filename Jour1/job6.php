<?php
class Personnage {
    private $x;
    private $y;

    // Constructeur pour initialiser la position du personnage
    public function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour déplacer le personnage à gauche
    public function gauche() {
        $this->x -= 1;
    }

    // Méthode pour déplacer le personnage à droite
    public function droite() {
        $this->x += 1;
    }

    // Méthode pour déplacer le personnage vers le haut
    public function haut() {
        $this->y -= 1;
    }

    // Méthode pour déplacer le personnage vers le bas
    public function bas() {
        $this->y += 1;
    }

    // Méthode pour afficher la position actuelle
    public function position() {
        return "Position actuelle : (" . $this->x . ", " . $this->y . ")<br>";
    }
}

// Création d'un personnage à la position (0,0)
$joueur = new Personnage();

// Affichage de la position initiale
echo $joueur->position();

// Déplacement du personnage
$joueur->droite();
$joueur->bas();

// Affichage de la position après déplacement
echo $joueur->position();

// Déplacement supplémentaire
$joueur->gauche();
$joueur->haut();

// Affichage de la position finale
echo $joueur->position();
?>
