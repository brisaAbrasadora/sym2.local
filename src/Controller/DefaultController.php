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
}