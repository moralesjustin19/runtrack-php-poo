<?php
class Livre {
    private $titre;
    private $auteur;
    private $nbPages;

    // Constructeur pour initialiser les attributs
    public function __construct($titre, $auteur, $nbPages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNbPages($nbPages); // Utilisation du mutateur pour validation
    }

    // Assesseurs (Getters)
    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getNbPages() {
        return $this->nbPages;
    }

    // Mutateurs (Setters)
    public function setTitre($nouveauTitre) {
        $this->titre = $nouveauTitre;
    }

    public function setAuteur($nouvelAuteur) {
        $this->auteur = $nouvelAuteur;
    }

    public function setNbPages($nouveauNbPages) {
        if (is_int($nouveauNbPages) && $nouveauNbPages > 0) {
            $this->nbPages = $nouveauNbPages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.<br>";
        }
    }

    // Méthode pour afficher les informations du livre
    public function afficher() {
        return [
            "Titre" => $this->titre,
            "Auteur" => $this->auteur,
            "Nombre de pages" => $this->nbPages
        ];
    }
}

// Création d'un livre avec titre, auteur et nombre de pages
$livre1 = new Livre("1984", "George Orwell", 328);

// Affichage des informations initiales
$infosAvantModification = $livre1->afficher();

// Modification du titre, de l'auteur et du nombre de pages
$livre1->setTitre("Animal Farm");
$livre1->setAuteur("George Orwell");
$livre1->setNbPages(150); // Modification valide
$livre1->setNbPages(-50); // Tentative de modification invalide

// Vérification des modifications
$infosApresModification = $livre1->afficher();

// Affichage des résultats (hors de la classe)
print_r($infosAvantModification);
print_r($infosApresModification);
?>
