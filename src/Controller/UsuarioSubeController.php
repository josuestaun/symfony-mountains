<?php

namespace App\Controller;

use App\Entity\UsuarioSube;
use App\Form\UsuarioSubeType;
use App\Repository\UsuarioSubeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/usuario/sube")
 */
class UsuarioSubeController extends AbstractController
{
    /**
     * @Route("/", name="usuario_sube_index", methods={"GET"})
     */
    public function index(UsuarioSubeRepository $usuarioSubeRepository): Response
    {
        return $this->render('usuario_sube/index.html.twig', [
            'usuario_subes' => $usuarioSubeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="usuario_sube_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $usuarioSube = new UsuarioSube();
        $form = $this->createForm(UsuarioSubeType::class, $usuarioSube);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuarioSube);
            $entityManager->flush();

            return $this->redirectToRoute('usuario_sube_index');
        }

        return $this->render('usuario_sube/new.html.twig', [
            'usuario_sube' => $usuarioSube,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="usuario_sube_show", methods={"GET"})
     */
    public function show(UsuarioSube $usuarioSube): Response
    {
        return $this->render('usuario_sube/show.html.twig', [
            'usuario_sube' => $usuarioSube,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="usuario_sube_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, UsuarioSube $usuarioSube): Response
    {
        $form = $this->createForm(UsuarioSubeType::class, $usuarioSube);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('usuario_sube_index');
        }

        return $this->render('usuario_sube/edit.html.twig', [
            'usuario_sube' => $usuarioSube,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="usuario_sube_delete", methods={"DELETE"})
     */
    public function delete(Request $request, UsuarioSube $usuarioSube): Response
    {
        if ($this->isCsrfTokenValid('delete'.$usuarioSube->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($usuarioSube);
            $entityManager->flush();
        }

        return $this->redirectToRoute('usuario_sube_index');
    }
}
