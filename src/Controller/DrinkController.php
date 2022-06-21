<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrinkController extends AbstractController
{
    #[Route('/drink', name: 'app_drink')]

    public function index(): Response

    {

        return $this->render('drink/index.html.twig', [
            'drink_name' => 'example',
            'drink_type' => 'alcoholic',
            'drink_instruction' => 'do this and this and this and that and your drink is done',
            'drink_ingredients' => 'kiwi apple juice lychee',
            'drink_glass' => 'martini glass',
            'drink_image' => 'https://www.mojegotowanie.pl/media/cache/default_view/uploads/media/recipe/0002/20/drink-wsciekly-pies_1.jpeg',
        ]);
    }

}
