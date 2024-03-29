<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ProductRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ProductRepository $ProductRepository): Response
    {
        return $this->render('home/index.html.twig',[

            'productInHome' => $ProductRepository->productInHome(6)
        ]);
    }
}
