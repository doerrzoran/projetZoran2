<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloUserController extends AbstractController
{
    #[Route('/hello/{user}', name: 'app_hello_user')]
    public function index($user): Response
    {
        return $this->render('hello_user/index.html.twig', [
            'controller_name' => 'HelloUserController',
            'user' => $user
        ]);
    }
}
