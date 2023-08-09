<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenusController
{
    #[Route(path: '/zalupa')]
    public function showAction(): Response
    {
        return new Response('LOL: ');
    }
}