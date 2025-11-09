<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class JsonController extends AbstractController
{
    #[Route('/json', name: 'app_json')]
    public function jsonApp(): JsonResponse
    {
        return new JsonResponse([
            'success' => true,
        ]);
    }

    #[Route('/text/{pos}', name: 'app_text')]
    public function textApp(string $pos = 'undefined'): Response
    {
        return new Response("<b>{$pos}</b>");
    }
}
