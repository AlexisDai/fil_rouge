<?php

namespace App\Controller;

use App\Entity\Rubrique;
use App\Repository\ProduitRepository;
use App\Repository\RubriqueRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    
    #[Route('/rubrique', name: 'rubrique')]
    public function index(RubriqueRepository $repo): Response
    {
        $rubriques = $repo->findBy(array('rubrique' => null));


        return $this->render('home/rubrique.html.twig', [
            'rubrique' => $rubriques,
        ]);
    }


    #[Route('/sousRubrique/{id}', name: 'sousRubrique')]
    public function sousRubrique(RubriqueRepository $repo2, $id): Response
    { 
        $rubriques = $repo2->findBy(array('rubrique' => null));   
        $ssRub = $repo2->findBy(array('rubrique' => $id ));

        return $this->render('home/sousRubrique.html.twig', [
            'sousRubrique' => $ssRub,
            'rubrique'     => $rubriques       
        ]);
    }


}
