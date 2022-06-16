<?php declare(strict_types=1);

namespace App\Service\Util;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Base service with http utilization methods
 */
class HttpUtilService
{
    static public function jsonResponse(
        string $message,
        int $status = 200,
        bool $success = true,
        ?int $offset = null,
        ?int $limit = null,
        ?int $total = null,
    ): JsonResponse {
        return new JsonResponse([
            "message" => $message,
            "status" => $status,
            "success" => $success,
            "offset" => $offset,
            "limit" => $limit,
            "total" => $total
        ]);
    }
}
