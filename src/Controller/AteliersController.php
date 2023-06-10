<?php

namespace App\Controller;

use App\Entity\Ateliers;
use App\Form\AteliersType;
use App\Repository\AteliersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ateliers')]
class AteliersController extends AbstractController
{
    #[Route('/', name: 'app_ateliers_index', methods: ['GET'])]
    public function index(AteliersRepository $ateliersRepository): Response
    {
        return $this->render('ateliers/index.html.twig', [
            'ateliers' => $ateliersRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ateliers_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AteliersRepository $ateliersRepository): Response
    {
        $atelier = new Ateliers();
        $form = $this->createForm(AteliersType::class, $atelier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ateliersRepository->save($atelier, true);

            return $this->redirectToRoute('app_ateliers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ateliers/new.html.twig', [
            'atelier' => $atelier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ateliers_show', methods: ['GET'])]
    public function show(Ateliers $atelier): Response
    {
        return $this->render('ateliers/show.html.twig', [
            'atelier' => $atelier,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ateliers_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ateliers $atelier, AteliersRepository $ateliersRepository): Response
    {
        $form = $this->createForm(AteliersType::class, $atelier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ateliersRepository->save($atelier, true);

            return $this->redirectToRoute('app_ateliers_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ateliers/edit.html.twig', [
            'atelier' => $atelier,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ateliers_delete', methods: ['POST'])]
    public function delete(Request $request, Ateliers $atelier, AteliersRepository $ateliersRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$atelier->getId(), $request->request->get('_token'))) {
            $ateliersRepository->remove($atelier, true);
        }

        return $this->redirectToRoute('app_ateliers_index', [], Response::HTTP_SEE_OTHER);
    }
}
