<?php
class Personne {
    public $nom;
    public $prenom;

    // Constructeur pour initialiser nom et prénom
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Méthode pour afficher la présentation de la personne
    public function SePresenter() {
        return "Bonjour, je m'appelle " . $this->prenom . " " . $this->nom . ".<br>";
    }
}

// Création de plusieurs instances de la classe Personne
$personne1 = new Personne("Dupont", "Jean");
$personne2 = new Personne("Martin", "Sophie");
$personne3 = new Personne("Durand", "Paul");

// Affichage de la présentation de chaque personne
echo $personne1->SePresenter();
echo $personne2->SePresenter();
echo $personne3->SePresenter();
?>
