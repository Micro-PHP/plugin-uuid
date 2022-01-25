<?php

namespace Micro\Plugin\Uuid\Business\Uuid;

interface UuidGeneratorFactoryInterface
{
    /**
     * @return UuidGeneratorInterface
     */
    public function create(): UuidGeneratorInterface;
}
