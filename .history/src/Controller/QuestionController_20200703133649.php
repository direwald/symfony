<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController {

    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response('What a bitch controller!');
    }

    /**
     * @Route("/questions/hot-to-tie-my-shoes-with-magic")
     */
    public function show() {
        return new Response('Future page to show a question');
    }
}