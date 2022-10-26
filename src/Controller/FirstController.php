<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController
{
    public function index()
    {
        return new Response('Hello World');
    }

    public function name()
    {
        return new Response('Hi, my name is Guillaume Malecha.');
    }

    /**
     * @Route("/random")
     */

    public function random()
    {
        return new Response('Chiffre aléatoire : ' . rand(0,9) . '<br> Date du jour : ' . date('string',time()) );
    }
}