<?php

class Commande {
    // Attributs privés
    private $numeroCommande;
    private $platsCommandes;
    private $statut;

    // Constantes pour les statuts
    const STATUT_EN_COURS = "en cours";
    const STATUT_TERMINEE = "terminée";
    const STATUT_ANNULEE = "annulée";

    // Constructeur
    public function __construct($numeroCommande) {
        $this->numeroCommande = $numeroCommande;
        $this->platsCommandes = [];  // Liste des plats commandés
        $this->statut = self::STATUT_EN_COURS;  // Statut initial de la commande
    }

    // Méthode pour ajouter un plat à la commande
    public function ajouterPlat($nomPlat, $prixPlat) {
        if ($this->statut === self::STATUT_EN_COURS) {
            $this->platsCommandes[$nomPlat] = [
                "prix" => $prixPlat,
                "statut" => "commandé"
            ];
            echo "Plat ajouté : " . $nomPlat . " au prix de " . $prixPlat . "€.<br>";
        } else {
            echo "Impossible d'ajouter un plat, la commande est " . $this->statut . ".<br>";
        }
    }

    // Méthode pour annuler la commande
    public function annulerCommande() {
        if ($this->statut === self::STATUT_EN_COURS) {
            $this->statut = self::STATUT_ANNULEE;
            $this->platsCommandes = [];  // Réinitialiser la liste des plats
            echo "La commande a été annulée.<br>";
        } else {
            echo "Impossible d'annuler la commande, elle est déjà " . $this->statut . ".<br>";
        }
    }

    // Méthode pour afficher la commande avec son total
    public function afficherCommande() {
        if ($this->statut === self::STATUT_ANNULEE) {
            echo "La commande est annulée. Aucune information à afficher.<br>";
            return;
        }

        echo "Numéro de commande : " . $this->numeroCommande . "<br>";
        echo "Statut de la commande : " . $this->statut . "<br>";

        if (empty($this->platsCommandes)) {
            echo "Aucun plat commandé.<br>";
        } else {
            echo "Plats commandés :<br>";
            foreach ($this->platsCommandes as $plat => $details) {
                echo "- " . $plat . " : " . $details["prix"] . "€<br>";
            }
            $total = $this->calculerTotal();
            echo "Total (sans TVA) : " . $total . "€<br>";
            $totalAvecTVA = $this->calculerTVA($total);
            echo "Total avec TVA : " . $totalAvecTVA . "€<br>";
        }
    }

    // Méthode privée pour calculer le total d'une commande
    private function calculerTotal() {
        $total = 0;
        foreach ($this->platsCommandes as $plat => $details) {
            $total += $details["prix"];
        }
        return $total;
    }

    // Méthode pour calculer la TVA (TVA à 20% par exemple)
    public function calculerTVA($total) {
        $tauxTVA = 0.20;  // TVA de 20%
        return $total * (1 + $tauxTVA);
    }

    // Méthode pour récupérer le statut de la commande
    public function getStatut() {
        return $this->statut;
    }

    // Méthode pour récupérer les plats commandés
    public function getPlatsCommandes() {
        return $this->platsCommandes;
    }

    // Méthode pour récupérer le numéro de la commande
    public function getNumeroCommande() {
        return $this->numeroCommande;
    }
}

// Exemple d'utilisation
$commande1 = new Commande(123);

// Ajouter des plats à la commande
$commande1->ajouterPlat("Pizza Margherita", 12.50);
$commande1->ajouterPlat("Salade César", 8.00);

// Afficher la commande avec le total
$commande1->afficherCommande();

// Annuler la commande et essayer d'ajouter un plat après annulation
$commande1->annulerCommande();
$commande1->ajouterPlat("Pâtes Bolognese", 10.00);  // Cela ne fonctionnera pas

?>
