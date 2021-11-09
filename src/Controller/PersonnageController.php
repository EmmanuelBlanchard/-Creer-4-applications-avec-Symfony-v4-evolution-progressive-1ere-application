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
        return $this->render('personnage/personnages.html.twig', [
            "pseudo" => "toto",
            "age" => 25,
            "caracteristiques" => [
                "force" => 3,
                "agilite" => 2,
                "intelligence" => 3
            ]
        ]);
    }
}
