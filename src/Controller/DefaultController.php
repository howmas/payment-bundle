<?php

namespace HowMAS\PaymentBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends FrontendController
{
    /**
     * @Route("/how_mas_payment")
     */
    public function indexAction(Request $request): Response
    {
        return new Response('Hello world from how_mas_payment');
    }
}
