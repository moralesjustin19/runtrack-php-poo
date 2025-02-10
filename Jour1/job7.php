<?php
class Cercle {
    private $rayon;

    // Constructeur pour initialiser le rayon du cercle
    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    // Méthode pour modifier le rayon du cercle
    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    // Méthode pour calculer la circonférence du cercle
    public function circonference() {
        return 2 * pi() * $this->rayon;
    }

    // Méthode pour calculer l'aire du cercle
    public function aire() {
        return pi() * pow($this->rayon, 2);
    }

    // Méthode pour calculer le diamètre du cercle
    public function diametre() {
        return 2 * $this->rayon;
    }

    // Méthode pour afficher les informations du cercle
    public function afficherInfos() {
        echo "Cercle de rayon : " . $this->rayon . "<br>";
        echo "Diamètre : " . $this->diametre() . "<br>";
        echo "Circonférence : " . round($this->circonference(), 2) . "<br>";
        echo "Aire : " . round($this->aire(), 2) . "<br><br>";
    }
}

// Création de deux cercles avec des rayons de 4 et 7
$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

// Affichage des informations des cercles
echo "Informations du premier cercle : <br>";
$cercle1->afficherInfos();

echo "Informations du deuxième cercle : <br>";
$cercle2->afficherInfos();
?>
