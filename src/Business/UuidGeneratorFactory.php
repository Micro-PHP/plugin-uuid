<?php

namespace Micro\Plugin\Uuid\Business\Uuid;

class UuidGeneratorFactory implements UuidGeneratorFactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function create(): UuidGeneratorInterface
    {
        return new UuidGenerator();
    }
}
