<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index()
    {
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
    }
    /**
     * @Route("/helloWorld", name="helloWorld")
     */
    public function helloWorld()
    {
        return $this->render('hello/hello.html.twig', []);
    }
    /**
     * @Route("/rand", name="rand")
     */
    public function randomNumber()
    {
        $number = rand();

        return $this->render('hello/rand.html.twig', [
            'randomNumber' => $number,
        ]);
    }
}
