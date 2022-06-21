<?php

namespace App\Controller;
use App\Entity\Drink;
use App\Repository\DrinkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainPageController extends AbstractController
{
    #[Route('/', name: 'main_page')]
    public function index(DrinkRepository $drinkRepository): Response
    {
        return $this->render('main_page/index.html.twig', [
           'drinks' =>$drinkRepository->findAll()
        ]);
    }
}
