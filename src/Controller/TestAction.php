<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestAction
 * @package App\Action
 * @Route("/test")
 */
class TestAction
{
    public function __invoke()
    {
        return new JsonResponse("eatme", 200);
    }
}