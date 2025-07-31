<?php

namespace TheRecluse26\LaravelAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
class WarnIfSlow
{
    public function __construct(
        public int $thresholdMs = 1000,
        public string $level = 'warning'
    ) {
    }
}