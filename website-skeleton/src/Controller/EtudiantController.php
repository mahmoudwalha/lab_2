<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{

    #[Route("/etudiant", name:"etudiant")]

    public function index(): Response
    {
        return new Response("Bonjour depuis EtudiantController !");
    }


#[Route("/etudiant/{id}", name:"affichage_etudiant",requirements: ["id" => "\d{2}"])]

public function affichageEtudiant($id): Response
{
    return new Response("L’ID de l’étudiant est : " . $id);
}


    #[Route("/etudiant/nom/{name}", name:"etudiant_name")]

    public function voirNom($name): Response
    {
        return $this->render("etudiant/etudiant.html.twig", [
            'nom' => $name
        ]);
    }
    #[Route("/etudiant/list", name:"etudiant_list")]
    public function listEtudiant(): Response
    {
        // Tableau associatif des modules
        $modules = [
            ['nom' => 'Mathématiques', 'coefficient' => 3, 'enseignant' => 'M. Ahmed'],
            ['nom' => 'Programmation', 'coefficient' => 4, 'enseignant' => 'Mme. Sara'],
            ['nom' => 'Base de Données', 'coefficient' => 2, 'enseignant' => 'M. Khaled'],
            ['nom' => 'Réseaux', 'coefficient' => 3, 'enseignant' => 'Mme. Mariem']
        ];

        // Envoi des données vers la vue
        return $this->render('etudiant/list.html.twig', [
            'modules' => $modules
        ]);
    }

     #[Route("/etudiant/affecter", name:"etudiant_affecter")]

    public function affecter(): Response
    {
        // Exemple de données à afficher
        $message = "Bienvenue dans la page d'affectation des étudiants aux modules !";

        return $this->render('etudiant/affecter.html.twig', [
            'message' => $message
        ]);
    }

     #[Route("/etudiant/index-fils", name:"etudiant_index_fils")]

    public function indexFils(): Response
    {
        return $this->render('etudiant/index.html.twig');
    }






}
