<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SecondController
{
    /**
     * @Route ("/nom")
     */
    public function response()
    {
        $response = new Response();
        $response->setContent(json_encode([
            'prenom' => 'Guillaume',
            'nom' => 'Malecha',
            'adresse' => 'Rue Henri Gerard 74 - 4680 Oupeye'
        ]));

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route ("/nom2")
     */
    public function otherresponse()
    {
        $otherresponse = new JsonResponse();
        $otherresponse->setData([
            'prenom' => 'Cesaria',
            'nom' => 'Evora',
            'adresse' => 'Cap Vert'
        ]);
        $otherresponse->headers->set('Content-Type', 'application/json');

        return $otherresponse;
    }
}