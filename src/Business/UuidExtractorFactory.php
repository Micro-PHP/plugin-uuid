<?php

namespace Micro\Plugin\Uuid\Business\Uuid;

class UuidExtractorFactory implements UuidExtractorFactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function create(): UuidExtractorInterface
    {
        return new UuidExtractor();
    }
}
