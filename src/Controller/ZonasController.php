<?php

namespace App\Controller;

use App\Entity\Zonas;
use App\Form\ZonasType;
use App\Repository\ZonasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/zonas")
 */
class ZonasController extends AbstractController
{
    /**
     * @Route("/", name="zonas_index", methods={"GET"})
     */
    public function index(ZonasRepository $zonasRepository): Response
    {
        return $this->render('zonas/index.html.twig', [
            'zonas' => $zonasRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="zonas_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $zona = new Zonas();
        $form = $this->createForm(ZonasType::class, $zona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($zona);
            $entityManager->flush();

            return $this->redirectToRoute('zonas_index');
        }

        return $this->render('zonas/new.html.twig', [
            'zona' => $zona,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zonas_show", methods={"GET"})
     */
    public function show(Zonas $zona): Response
    {
        return $this->render('zonas/show.html.twig', [
            'zona' => $zona,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="zonas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Zonas $zona): Response
    {
        $form = $this->createForm(ZonasType::class, $zona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('zonas_index');
        }

        return $this->render('zonas/edit.html.twig', [
            'zona' => $zona,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zonas_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Zonas $zona): Response
    {
        if ($this->isCsrfTokenValid('delete'.$zona->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($zona);
            $entityManager->flush();
        }

        return $this->redirectToRoute('zonas_index');
    }
}
