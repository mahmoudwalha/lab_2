<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    /**
     * @Route("/etudiant", name="etudiant")
     */
    public function index(): Response
    {
        return new Response("Bonjour depuis EtudiantController !");
    }

    /**
     * @Route("/etudiant/{id}", name="affichage_etudiant", requirements={"id"="\d{2}"})
     */
    public function affichageEtudiant($id): Response
    {
        return new Response("L’ID de l’étudiant est : " . $id);
    }

    /**
     * @Route("/etudiant/nom/{name}", name="etudiant_name")
     */
    public function voirNom($name): Response
    {
        return $this->render("etudiant/etudiant.html.twig", [
            'nom' => $name
        ]);
    }
}
