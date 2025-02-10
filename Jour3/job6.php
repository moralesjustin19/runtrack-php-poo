<?php

class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    protected $prix;

    public function __construct($marque, $modele, $annee, $prix) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
    }

    public function informationsVehicule() {
        echo "Marque = $this->marque\n";
        echo "Modèle = $this->modele\n";
        echo "Année = $this->annee\n";
        echo "Prix = $this->prix\n";
    }

    public function demarrer() {
        echo "Attention, je roule\n";
    }
}

class Voiture extends Vehicule {
    private $portes;

    public function __construct($marque, $modele, $annee, $prix, $portes = 4) {
        parent::__construct($marque, $modele, $annee, $prix);
        $this->portes = $portes;
    }

    public function informationsVehicule() {
        parent::informationsVehicule();
        echo "Nombre de portes = $this->portes\n";
    }

    public function demarrer() {
        echo "La voiture démarre en douceur !\n";
    }
}

class Moto extends Vehicule {
    private $roue;

    public function __construct($marque, $modele, $annee, $prix, $roue = 2) {
        parent::__construct($marque, $modele, $annee, $prix);
        $this->roue = $roue;
    }

    public function informationsVehicule() {
        parent::informationsVehicule();
        echo "Nombre de roues = $this->roue\n";
    }

    public function demarrer() {
        echo "La moto démarre avec puissance !\n";
    }
}

// Instanciation et tests
echo "Voiture :\n";
$voiture = new Voiture("Mercedes", "Classe A", 2020, 18500);
$voiture->informationsVehicule();
$voiture->demarrer();

echo "\nMoto :\n";
$moto = new Moto("Yamaha", "1200 Vmax", 1987, 4500);
$moto->informationsVehicule();
$moto->demarrer();

?>
