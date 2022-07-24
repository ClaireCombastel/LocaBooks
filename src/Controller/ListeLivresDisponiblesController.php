<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeLivresDisponiblesController extends AbstractController
{
    /**
     * @Route("/livresdisponibles", name="app_liste_livres_disponibles")
     */
    public function index(): Response
    {
        return $this->render('liste_livres_disponibles/index.html.twig', [
            'controller_name' => 'ListeLivresDisponiblesController',
        ]);
    }
}
