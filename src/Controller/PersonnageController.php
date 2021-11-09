<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }

    /**
     * @Route("/personnages", name="personnages")
     */
    public function personnages(): Response
    {
        $joueur1 = [
            "nom" => "Marc",
            "age" => 25,
            "sexe" => true,
            "caracteristiques" => [
                "force" => 3,
                "agilite" => 2,
                "intelligence" => 3
            ]
        ];
        $joueur2 = [
            "nom" => "Milo",
            "age" => 30,
            "sexe" => true,
            "caracteristiques" => [
                "force" => 5,
                "agilite" => 1,
                "intelligence" => 2
            ]
        ];
        $joueur3 = [
            "nom" => "Tya",
            "age" => 22,
            "sexe" => false,
            "caracteristiques" => [
                "force" => 1,
                "agilite" => 2,
                "intelligence" => 5
            ]
        ];
        $joueurs = [
            "joueur1" => $joueur1,
            "joueur2" => $joueur2,
            "joueur3" => $joueur3
        ];

        return $this->render('personnage/personnages.html.twig', [
            "joueurs" => $joueurs
        ]);

    }
}
