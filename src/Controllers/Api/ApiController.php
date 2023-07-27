<?php

declare(strict_types=1);

namespace Engelsystem\Controllers\Api;

use Engelsystem\Controllers\BaseController;
use Engelsystem\Http\Response;
use Engelsystem\Http\UrlGeneratorInterface;

abstract class ApiController extends BaseController
{
    public array $permissions = [
        'api',
    ];

    public function __construct(protected Response $response, protected UrlGeneratorInterface $url)
    {
        $this->response = $this->response
            ->withHeader('content-type', 'application/json')
            // Using * here to "skip" all other headers on browser requests
            ->withHeader('access-control-allow-origin', '*');
    }
}
