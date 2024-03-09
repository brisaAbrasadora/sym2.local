<?php
namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        $name = 'Sofia';
        $greeting = 'Good night';
        $tasks = [
            'Jumping',
            'Smiling',
            'Loving'
        ];
        $today = new DateTime();

        return $this->render('test.html.twig', [
            'name' => $name,
            'greeting' => $greeting,
            'tasks' => $tasks,
            'today' => $today
        ]);
    }

    public function index1()
    {
        return $this->render('prueba1.html.twig');
    }

    public function index2()
    {
        $nombre = 'Juan';
        $saludo = 'Buenos dias a todos';
        $nombres = ['Ana', 'Enrique', 'Laura', 'Pablo'];

        return $this->render('prueba2.html.twig', [
            'nombre' => $nombre,
            'saludo' => $saludo,
            'nombres' => $nombres,
            'fecha' => new \DateTime()
        ]);
    }
}