<?php

namespace Micro\Plugin\Uuid;


use Micro\Plugin\Uuid\Business\Uuid\UuidExtractorFactoryInterface;
use Micro\Plugin\Uuid\Business\Uuid\UuidGeneratorFactoryInterface;

class UuidFacadeFactory implements UuidFacadeFactoryInterface
{
    /**
     * @param UuidGeneratorFactoryInterface $generatorFactory
     */
    public function __construct(
        private UuidGeneratorFactoryInterface $generatorFactory,
        private UuidExtractorFactoryInterface $extractorFactory
    )
    {}

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
