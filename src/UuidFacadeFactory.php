<?php

namespace Micro\Plugin\Uuid;

use Micro\Plugin\Uuid\Business\UuidExtractorFactoryInterface;
use Micro\Plugin\Uuid\Business\UuidGeneratorFactoryInterface;

class UuidFacadeFactory implements UuidFacadeFactoryInterface
{
    /**
     * @param UuidGeneratorFactoryInterface $generatorFactory
     * @param UuidExtractorFactoryInterface $extractorFactory
     */
    public function __construct(
        private readonly UuidGeneratorFactoryInterface $generatorFactory,
        private readonly UuidExtractorFactoryInterface $extractorFactory
    )
    {
    }

    /**
     * {@inheritDoc}
     */
    public function create(): UuidFacadeInterface
    {
        return new UuidFacade(
            $this->generatorFactory,
            $this->extractorFactory
        );
    }
}
