<?php
namespace App\Controller;

use App\IEntity\Imagen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProyectoController extends AbstractController {
    public function index()
    {
        $imagenesHome[] = new Imagen('1.jpg', 'descripción imagen 1', 1, 506, 610, 130);
        $imagenesHome[] = new Imagen('2.jpg', 'descripción imagen 2', 1, 200, 610, 130);
        $imagenesHome[] = new Imagen('3.jpg', 'descripción imagen 3', 2, 300, 610, 130);
        $imagenesHome[] = new Imagen('4.jpg', 'descripción imagen 4', 2, 400, 610, 130);
        $imagenesHome[] = new Imagen('5.jpg', 'descripción imagen 5', 1, 600, 610, 130);
        $imagenesHome[] = new Imagen('6.jpg', 'descripción imagen 6', 1, 120, 610, 130);
        $imagenesHome[] = new Imagen('7.jpg', 'descripción imagen 7', 3, 560, 610, 130);
        $imagenesHome[] = new Imagen('8.jpg', 'descripción imagen 8', 1, 10, 610, 130);
        $imagenesHome[] = new Imagen('9.jpg', 'descripción imagen 9', 1, 25, 610, 130);
        $imagenesHome[] = new Imagen('10.jpg', 'descripción imagen 10', 3, 456, 610, 130);
        $imagenesHome[] = new Imagen('11.jpg', 'descripción imagen 11', 1, 456, 610, 130);
        $imagenesHome[] = new Imagen('12.jpg', 'descripción imagen 12', 1, 456, 610, 130);

        return $this->render('imagenes.html.twig', [
            'imagenes' => $imagenesHome
        ]);
    }
}