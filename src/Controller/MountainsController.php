<?php

namespace App\Controller;

use App\Entity\Mountains;
use App\Form\MountainsType;
use App\Repository\MountainsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/mountains")
 */
class MountainsController extends AbstractController
{
    /**
     * @Route("/", name="mountains_index", methods={"GET"})
     */
    public function index(MountainsRepository $mountainsRepository): Response
    {
        return $this->render('mountains/index.html.twig', [
            //ordenado por altura
            'mountains' => $mountainsRepository->findBy(array(), array('altura' => 'DESC'))
        ]);
    }

    /**
     * @Route("/new", name="mountains_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $mountain = new Mountains();
        $form = $this->createForm(MountainsType::class, $mountain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mountain);
            $entityManager->flush();

            return $this->redirectToRoute('mountains_index');
        }

        return $this->render('mountains/new.html.twig', [
            'mountain' => $mountain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mountains_show", methods={"GET"})
     */
    public function show(Mountains $mountain): Response
    {
        return $this->render('mountains/show.html.twig', [
            'mountain' => $mountain,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="mountains_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Mountains $mountain): Response
    {
        $form = $this->createForm(MountainsType::class, $mountain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mountains_index');
        }

        return $this->render('mountains/edit.html.twig', [
            'mountain' => $mountain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="mountains_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Mountains $mountain): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mountain->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mountain);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mountains_index');
    }
}
