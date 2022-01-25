<?php

namespace Micro\Plugin\Uuid\Business\Uuid;

interface UuidExtractorFactoryInterface
{
    /**
     * @return UuidExtractorInterface
     */
    public function create(): UuidExtractorInterface;
}
