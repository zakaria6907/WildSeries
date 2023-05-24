<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/program', name: 'program_')]
class ProgramController extends AbstractController
{
     
    #[Route('/{id}/', name: 'show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(int $id): Response
    {
        // Affichage de l'id du programme dans une balise <h1>
        return $this->render('program/list.html.twig', [
            'id' => $id,
        ]);
    }

     #[Route('/', name: 'index')]
     public function index(): Response
     {
         // ...
         return $this->render('program/list.html.twig');
     }

     #[Route('/new', name: 'new')]
     public function new(): Response
     {
         // ...
         return $this->redirectToRoute('program_show', ['id' => 4]);
     }


}