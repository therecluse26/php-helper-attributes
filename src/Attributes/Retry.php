<?php

namespace TheRecluse26\LaravelAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
class Retry
{
    public function __construct(
        public int $times = 3,
        public int $delayMs = 100
    ) {
    }
}