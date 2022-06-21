<?php

namespace App\Controller;

use App\Entity\Drink;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrinkController extends AbstractController
{
    #[Route('/drink/{name}', name: 'drink.detail')]

    public function index(Drink $drink): Response

    {
        return $this->render('drink/index.html.twig', [
            'drink' => $drink,
        ]);
    }

}
