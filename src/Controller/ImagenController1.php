<?php

namespace App\Controller;

use App\Entity\Imagen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;

class ImagenController1 extends AbstractController
{
    #[Route('/galeria', name: 'sym_galeria')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $imagenes = $doctrine->getRepository(Imagen::class)->findAll();

        return $this->render('imagen/index.html.twig', [
            'imagenes' => $imagenes,
        ]);
    }

    #[Route('/galeria/{id}', name: 'sym_imagen_show')]
    public function show(Imagen $imagen): Response
    {
        return $this->render('imagen/show.html.twig', [
            'imagen' => $imagen
        ]);
    }
}
