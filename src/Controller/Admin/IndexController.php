<?php

namespace App\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexController
 * @package App\Controller\Admin
 * @Route("/admin")
 */
class IndexController extends Controller
{
    /**
     * @return Response
     * @Route("/")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'number' => 1,
        ]);
    }

    /**
     * @return Response
     * @Route("/test")
     */
    public function test()
    {
        return new Response('admin/test');
    }
}