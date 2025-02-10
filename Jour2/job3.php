<?php
class Livre {
    private $titre;
    private $auteur;
    private $nbPages;
    private $disponible; // Nouvel attribut pour savoir si le livre est disponible

    // Constructeur pour initialiser les attributs
    public function __construct($titre, $auteur, $nbPages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNbPages($nbPages); // Validation du nombre de pages
        $this->disponible = true; // Initialisation de la disponibilité à True
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

    public function isDisponible() {
        return $this->disponible;
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
            "Nombre de pages" => $this->nbPages,
            "Disponible" => $this->disponible ? "Oui" : "Non"
        ];
    }

    // Méthode pour vérifier si le livre est disponible
    public function verification() {
        return $this->disponible;
    }

    // Méthode pour emprunter un livre
    public function emprunter() {
        if ($this->verification()) {
            $this->disponible = false; // Rendre le livre indisponible
            echo "Le livre '".$this->titre."' a été emprunté.<br>";
        } else {
            echo "Le livre '".$this->titre."' n'est pas disponible pour l'emprunt.<br>";
        }
    }

    // Méthode pour rendre un livre
    public function rendre() {
        if (!$this->verification()) {
            $this->disponible = true; // Rendre le livre disponible
            echo "Le livre '".$this->titre."' a été rendu et est maintenant disponible.<br>";
        } else {
            echo "Le livre '".$this->titre."' n'a pas été emprunté, il est déjà disponible.<br>";
        }
    }
}

// Création d'un livre
$livre1 = new Livre("1984", "George Orwell", 328);

// Affichage des informations initiales
$infosAvantModification = $livre1->afficher();
print_r($infosAvantModification);

// Essai d'emprunter le livre
$livre1->emprunter(); // Livre emprunté
$livre1->emprunter(); // Tentative d'emprunter un livre déjà emprunté

// Affichage des informations après emprunt
$infosApresEmprunt = $livre1->afficher();
print_r($infosApresEmprunt);

// Essai de rendre le livre
$livre1->rendre(); // Livre rendu
$livre1->rendre(); // Tentative de rendre un livre déjà disponible

// Affichage final
$infosFinal = $livre1->afficher();
print_r($infosFinal);
?>
