<?php

namespace TheRecluse26\LaravelAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
class Cache
{
    public function __construct(
        public int $ttl = 3600,
        public string $prefix = '',
        public ?string $key = null
    ) {
    }
}