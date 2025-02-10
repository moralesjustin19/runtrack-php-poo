<?php
class Student {
    private $nom;
    private $prenom;
    private $numEtudiant;
    private $credits;
    private $level;

    // Constructeur pour initialiser les attributs
    public function __construct($nom, $prenom, $numEtudiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numEtudiant = $numEtudiant;
        $this->credits = 0; // Crédits initialisés à zéro
        $this->level = $this->studentEval(); // Initialisation du niveau de l'étudiant
    }

    // Méthode pour ajouter des crédits à l'étudiant
    public function add_credits($credits) {
        if ($credits > 0) {
            $this->credits += $credits;
            $this->level = $this->studentEval(); // Mettre à jour le niveau après ajout de crédits
        } else {
            echo "Erreur : Le nombre de crédits doit être supérieur à zéro.<br>";
        }
    }

    // Méthode privée pour évaluer le niveau de l'étudiant en fonction des crédits
    private function studentEval() {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    // Méthode pour afficher les informations de l'étudiant
    public function studentInfo() {
        return [
            "Nom" => $this->nom,
            "Prénom" => $this->prenom,
            "Numéro d'étudiant" => $this->numEtudiant,
            "Crédits" => $this->credits,
            "Niveau" => $this->level
        ];
    }
}

// Création de l'objet représentant l'étudiant John Doe
$etudiant = new Student("Doe", "John", 145);

// Ajout de crédits à l'étudiant à trois reprises
$etudiant->add_credits(30); // Ajout de 30 crédits
$etudiant->add_credits(25); // Ajout de 25 crédits
$etudiant->add_credits(40); // Ajout de 40 crédits

// Affichage des informations de l'étudiant après les ajouts de crédits
$infosEtudiant = $etudiant->studentInfo();
print_r($infosEtudiant);
?>
