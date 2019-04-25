<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index()
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    /**
     * @Route("/post/create", name="post_create")
     */
    public function postCreate() {
        if(!isset($_POST["title"]) and !isset($_POST["text"])) {
            $title = $_POST["title"];
            $text = $_POST["text"];
            return $this->render('post/post.html.twig', [
                "title" => $title,
                "text" => $text
            ]);
        } else {
            return $this->render('post/create.html.twig', []);
        }
    }
}
