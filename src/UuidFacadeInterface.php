<?php

namespace Micro\Plugin\Uuid;

use Micro\Plugin\Uuid\Business\Uuid\UuidExtractorInterface;
use Micro\Plugin\Uuid\Business\Uuid\UuidGeneratorInterface;

interface UuidFacadeInterface extends UuidGeneratorInterface, UuidExtractorInterface
{
}
