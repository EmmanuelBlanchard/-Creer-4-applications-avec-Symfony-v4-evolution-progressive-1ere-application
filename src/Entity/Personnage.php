<?php

namespace App\Entity;

class Personnage {
    public $nom;
    public $age;
    public $sexe;
    public $caracteristiques = [];

    public static $personnages = [];

    public function __construct($nom,$age,$sexe,$caracteristiques) {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->caracteristiques = $caracteristiques;
        self::$personnages[] = $this;
    }

    public static function creerPersonnages() {
        $p1 = new Personnage("Marc", 25, true, [
            "force" => 3,
            "agilite" => 2,
            "intelligence" => 3
        ]);
        $p2 = new Personnage("Milo", 30, true, [
            "force" => 5,
            "agilite" => 1,
            "intelligence" => 2
        ]);
        $p3 = new Personnage("Tya", 22, false, [
            "force" => 1,
            "agilite" => 2,
            "intelligence" => 5
        ]);
    }

    public static function getPersonnageParNom($nom) {
        foreach(self::$personnages as $personnage) {
            if (strtolower($personnage->nom) === $nom) {
                return $personnage;
            }
        }
    }

}