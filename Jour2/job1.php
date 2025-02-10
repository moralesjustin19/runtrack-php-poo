<?php
class Rectangle {
    private $longueur;
    private $largeur;

    // Constructeur pour initialiser la longueur et la largeur
    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Assesseurs (Getters) pour obtenir les valeurs des attributs
    public function getLongueur() {
        return $this->longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    // Mutateurs (Setters) pour modifier les valeurs des attributs
    public function setLongueur($nouvelleLongueur) {
        $this->longueur = $nouvelleLongueur;
    }

    public function setLargeur($nouvelleLargeur) {
        $this->largeur = $nouvelleLargeur;
    }

    // Méthode pour afficher les informations du rectangle
    public function afficher() {
        return [
            "Longueur" => $this->longueur,
            "Largeur" => $this->largeur
        ];
    }
}

// Création d'un rectangle avec longueur = 10 et largeur = 5
$rectangle = new Rectangle(10, 5);

// Affichage des informations initiales
$infosAvantModification = $rectangle->afficher();

// Modification de la longueur et de la largeur
$rectangle->setLongueur(15);
$rectangle->setLargeur(8);

// Vérification des modifications
$infosApresModification = $rectangle->afficher();

// Affichage des résultats (hors de la classe)
print_r($infosAvantModification);
print_r($infosApresModification);
?>
