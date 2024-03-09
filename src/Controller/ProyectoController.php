<?php
namespace App\Controller;

use App\IEntity\Asociado;
use App\IEntity\Imagen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ProyectoController extends AbstractController {

    #[Route('/', name: 'sym_index')]
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

        $logosAsociados[] = new Asociado('logo 1', 'log1.jpg', 'descripcion logo 1');
        $logosAsociados[] = new Asociado('logo 2', 'log2.jpg', 'descripcion logo 2');
        $logosAsociados[] = new Asociado('logo 3', 'log3.jpg', 'descripcion logo 3');

        return $this->render('index.view.html.twig', [
            'imagenes' => $imagenesHome,
            'asociados' => $logosAsociados
        ]);
    }

    #[Route('/about', name: 'sym_about')]
    public function about()
    {
        $imagenesClientes[] = new Imagen('client1.jpg', 'MISS BELLA');
        $imagenesClientes[] = new Imagen('client2.jpg', 'DON PENO');
        $imagenesClientes[] = new Imagen('client3.jpg', 'SWEETY');
        $imagenesClientes[] = new Imagen('client4.jpg', 'LADY');

        return $this->render('about.view.html.twig', [
            'clientes' => $imagenesClientes
        ]);
    }

    #[Route('/blog', name: 'sym_blog')]
    public function blog()
    {
        return $this->render('blog.view.html.twig');
    }

    #[Route('/contact', name: 'sym_contact')]
    public function contact()
    {
        return $this->render('contact.view.html.twig');
    }
}