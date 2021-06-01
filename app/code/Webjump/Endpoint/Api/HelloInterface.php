<?php

declare(strict_types=1);

namespace Webjump\Endpoint\Api;

interface HelloInterface
{
     /**
     * Return name
     *
     * @param string|null $name
     *
     * @return string
     */
    public function hello(?string $name = 'Strange'): array;
}