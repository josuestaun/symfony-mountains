<?php

namespace App\Controller;

use App\Entity\Mountains;
use App\Form\MountainsType;
use App\Repository\MountainsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController{
        /**
     * @Route("/", name="index")
     */
    
    public function index(MountainsRepository $mountainsRepository): Response
    {
        return $this->render('mountains/index.html.twig', [
            //ordenado por altura
            'mountains' => $mountainsRepository->findBy(array(), array('altura' => 'DESC'))
        ]);
    }

}

