<?php

namespace App\Controller;

use App\Repository\CareerRepository;
use App\Repository\WebsiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CareerRepository $careerRepository, WebsiteRepository $websiteRepository): Response
    {
        $careerList = $careerRepository->findAll();
        $websites = $websiteRepository->findBy([], ['id' => 'DESC']);

        return $this->render('home/index.html.twig', [
            'careerList' => $careerList,
            'websites' => $websites,
        ]);
    }
}
