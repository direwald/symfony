<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class QuestionController {

    public function homepage() {
        return new Response('What a bitch controller!');
    }
}