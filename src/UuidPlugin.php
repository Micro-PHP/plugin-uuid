<?php

namespace Micro\Plugin\Uuid;

use Micro\Component\DependencyInjection\Container;
use Micro\Framework\Kernel\Plugin\AbstractPlugin;
use Micro\Plugin\Uuid\Business\UuidExtractorFactory;
use Micro\Plugin\Uuid\Business\UuidExtractorFactoryInterface;
use Micro\Plugin\Uuid\Business\UuidGeneratorFactory;
use Micro\Plugin\Uuid\Business\UuidGeneratorFactoryInterface;

class UuidPlugin extends AbstractPlugin
{
    /**
     * {@inheritDoc}
     */
    public function provideDependencies(Container $container): void
    {
        $container->register(UuidFacadeInterface::class, function(Container $container) {
            return $this->createUuidFacadeFactory()->create();
        });
    }

    /**
     * @return UuidFacadeFactoryInterface
     */
    protected function createUuidFacadeFactory(): UuidFacadeFactoryInterface
    {
        return new UuidFacadeFactory(
            $this->createUuidGeneratorFactory(),
            $this->createUuidExtractorFactory()
        );
    }

    /**
     * @return UuidGeneratorFactoryInterface
     */
    protected function createUuidGeneratorFactory(): UuidGeneratorFactoryInterface
    {
        return new UuidGeneratorFactory();
    }

    /**
     * @return UuidExtractorFactoryInterface
     */
    protected function createUuidExtractorFactory(): UuidExtractorFactoryInterface
    {
        return new UuidExtractorFactory();
    }
}
