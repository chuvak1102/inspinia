<?php

namespace App\Controller\Front;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexController
 * @package App\Controller\Admin
 * @Route("/")
 */
class IndexController extends Controller
{
    /**
     * @return Response
     * @Route("/")
     */
    public function index()
    {
        return $this->render('front/index.html.twig', [
            'number' => 1,
        ]);
    }

    /**
     * @return Response
     * @Route("/test")
     */
    public function test()
    {
        return new Response('index/test');
    }
}