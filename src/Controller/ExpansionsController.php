<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Util\HttpUtilService;

class ExpansionsController extends AbstractController
{
    #[Route('/expansions', name: 'app_expansions')]
    public function index(): JsonResponse
    {
        return HttpUtilService::jsonReponse("test");
    }
}
