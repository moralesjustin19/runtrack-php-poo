<?php
class Voiture {
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $en_marche;
    private $reservoir;

    // Constructeur pour initialiser les attributs
    public function __construct($marque, $modele, $annee, $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->en_marche = false;  // La voiture est éteinte au départ
        $this->reservoir = 50;  // Le réservoir est plein par défaut
    }

    // Assesseurs (Getters)
    public function getMarque() {
        return $this->marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function getKilometrage() {
        return $this->kilometrage;
    }

    public function getEnMarche() {
        return $this->en_marche;
    }

    public function getReservoir() {
        return $this->reservoir;
    }

    // Mutateurs (Setters)
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    public function setKilometrage($kilometrage) {
        $this->kilometrage = $kilometrage;
    }

    public function setReservoir($reservoir) {
        if ($reservoir >= 0 && $reservoir <= 100) {
            $this->reservoir = $reservoir;
        } else {
            echo "Erreur : Le réservoir doit être entre 0 et 100.<br>";
        }
    }

    // Méthode privée pour vérifier si le réservoir est suffisant pour démarrer
    private function verifier_plein() {
        return $this->reservoir > 5;  // Si le réservoir est supérieur à 5, la voiture peut démarrer
    }

    // Méthode pour démarrer la voiture
    public function demarrer() {
        if ($this->verifier_plein()) {
            $this->en_marche = true;  // La voiture démarre
            echo "La voiture a démarré.<br>";
        } else {
            echo "Le réservoir est insuffisant pour démarrer la voiture. Il faut plus de 5 litres.<br>";
        }
    }

    // Méthode pour arrêter la voiture
    public function arreter() {
        $this->en_marche = false;  // La voiture s'arrête
        echo "La voiture est arrêtée.<br>";
    }
    
    // Méthode pour afficher les informations de la voiture
    public function afficherInfos() {
        return [
            "Marque" => $this->marque,
            "Modèle" => $this->modele,
            "Année" => $this->annee,
            "Kilométrage" => $this->kilometrage,
            "En marche" => $this->en_marche ? "Oui" : "Non",
            "Réservoir" => $this->reservoir . " litres"
        ];
    }
}

// Création d'une voiture
$voiture1 = new Voiture("Toyota", "Corolla", 2020, 25000);

// Affichage des informations de la voiture avant démarrage
$infosAvantDemarrage = $voiture1->afficherInfos();
print_r($infosAvantDemarrage);

// Tentative de démarrer la voiture
$voiture1->demarrer();  // La voiture démarre si le réservoir est suffisant

// Affichage des informations après démarrage
$infosApresDemarrage = $voiture1->afficherInfos();
print_r($infosApresDemarrage);

// Modification du réservoir (par exemple, mettre à 3 litres)
$voiture1->setReservoir(3);

// Tentative de démarrer la voiture avec un réservoir insuffisant
$voiture1->demarrer();  // Le réservoir est trop faible pour démarrer

// Affichage des informations après modification du réservoir
$infosApresModificationReservoir = $voiture1->afficherInfos();
print_r($infosApresModificationReservoir);

// Tentative de démarrer la voiture après avoir ajouté plus de carburant
$voiture1->setReservoir(10);  // Ajouter 10 litres
$voiture1->demarrer();  // La voiture peut maintenant démarrer

// Affichage final des informations de la voiture
$infosFinal = $voiture1->afficherInfos();
print_r($infosFinal);

// Arrêter la voiture
$voiture1->arreter();  // La voiture est arrêtée
?>
