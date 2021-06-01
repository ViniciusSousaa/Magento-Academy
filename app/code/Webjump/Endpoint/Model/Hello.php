<?php

declare(strict_types=1);

namespace Webjump\Endpoint\Model;

use Webjump\Endpoint\Api\HelloInterface;

class Hello implements HelloInterface
{
    public function hello(?string $name = 'Strange'): array
    {
        if (empty($name)){
            $name = 'Strange';
        }
        $response['success'] =  'true';
        $response['message'] = 'Hello ' . $name;
        return [$response];
    }

}