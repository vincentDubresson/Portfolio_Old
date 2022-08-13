<?php

namespace App\Controller;

use App\Repository\CareerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CareerRepository $careerRepository): Response
    {
        $careerList = $careerRepository->findAll();

        return $this->render('home/index.html.twig', [
            'careerList' => $careerList,
        ]);
    }
}
