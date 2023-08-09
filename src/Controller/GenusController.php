<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GenusController
{
    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        return new Response(
            "LOL: "
        );
    }
}