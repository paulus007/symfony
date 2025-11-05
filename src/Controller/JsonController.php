<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class JsonController extends AbstractController
{
    #[Route('/{json}', name: 'app_json')]
    public function index(): JsonResponse
    {
        return new JsonResponse([
            'success' => true,
        ]);
    }
}
