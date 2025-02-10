<?php
class Produit {
    private $nom;
    private $prixHT;
    private $TVA;

    // Constructeur pour initialiser les attributs du produit
    public function __construct($nom, $prixHT, $TVA) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    // Méthode pour calculer le prix TTC
    public function CalculerPrixTTC() {
        return $this->prixHT * (1 + $this->TVA / 100);
    }

    // Méthode pour modifier le nom du produit
    public function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    // Méthode pour modifier le prix HT du produit
    public function setPrixHT($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

    // Méthode pour modifier la TVA
    public function setTVA($nouvelleTVA) {
        $this->TVA = $nouvelleTVA;
    }

    // Méthode pour retourner le nom du produit
    public function getNom() {
        return $this->nom;
    }

    // Méthode pour retourner le prix HT du produit
    public function getPrixHT() {
        return $this->prixHT;
    }

    // Méthode pour retourner la TVA
    public function getTVA() {
        return $this->TVA;
    }

    // Méthode pour retourner toutes les informations du produit
    public function afficher() {
        return [
            "Nom" => $this->nom,
            "Prix HT" => $this->prixHT,
            "TVA" => $this->TVA . "%",
            "Prix TTC" => round($this->CalculerPrixTTC(), 2)
        ];
    }
}

// Création de plusieurs produits
$produit1 = new Produit("Ordinateur", 800, 20);
$produit2 = new Produit("Smartphone", 500, 20);
$produit3 = new Produit("Casque Audio", 100, 10);

// Affichage des informations initiales des produits
$infosProduit1 = $produit1->afficher();
$infosProduit2 = $produit2->afficher();
$infosProduit3 = $produit3->afficher();

// Modification des produits
$produit1->setNom("PC Gamer");
$produit1->setPrixHT(1000);

$produit2->setNom("iPhone");
$produit2->setPrixHT(1200);

$produit3->setNom("AirPods");
$produit3->setPrixHT(150);

// Affichage des nouvelles informations après modification
$nouveauInfosProduit1 = $produit1->afficher();
$nouveauInfosProduit2 = $produit2->afficher();
$nouveauInfosProduit3 = $produit3->afficher();

// Affichage des résultats (hors de la classe)
print_r($infosProduit1);
print_r($infosProduit2);
print_r($infosProduit3);

print_r($nouveauInfosProduit1);
print_r($nouveauInfosProduit2);
print_r($nouveauInfosProduit3);
?>
