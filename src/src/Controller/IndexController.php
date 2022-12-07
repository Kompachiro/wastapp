<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/hello-wastapp', name: 'app_hello-wastapp',  methods: ['GET'])]
    public function helloWastapp(): Response
    {
        return $this->json([
            'data' => 'Welcome to Wastapp!',
        ], 200, []);
    }

    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
