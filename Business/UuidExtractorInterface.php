<?php

namespace Micro\Plugin\Uuid\Business;

interface UuidExtractorInterface
{
    /**
     * Creates a UUID from a string UUID.
     *
     * @param string $source
     *
     * @return string
     */
    public function fromString(string $source): string;

    /**
     * Creates a UUID from a 16-byte string.
     *
     * @param string $bytes
     *
     * @return string
     */
    public function fromBytes(string $bytes): string;

    /**
     * Creates a UUID from a string integer.
     *
     * @param string $integer
     *
     * @return string
     */
    public function fromInteger(string $integer): string;

    /**
     * Creates a UUID from a DateTimeInterface instance
     *
     * @param \DateTimeInterface $dateTime
     *
     * @return string
     */
    public function fromDatetime(\DateTimeInterface $dateTime): string;
}
