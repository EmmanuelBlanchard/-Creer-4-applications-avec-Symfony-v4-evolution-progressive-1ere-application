<?php

namespace App\Controller;

use App\Entity\Personnage;
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
        Personnage::creerPersonnages();
        return $this->render('personnage/personnages.html.twig', [
            "joueurs" => Personnage::$personnages
        ]);

    }

    /**
     * @Route("/personnages/{nom}", name="afficher_personnage")
     */
    public function afficherPersonnage($nom): Response
    {
        Personnage::creerPersonnages();
        $personnage = Personnage::getPersonnageParNom($nom);
        return $this->render('personnage/personnage.html.twig', [
            "personnage" => $personnage
        ]);

    }
    
}
