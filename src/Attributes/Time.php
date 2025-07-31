<?php

namespace TheRecluse26\LaravelAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
class Time
{
    public function __construct(
        public string $level = 'info',
        public ?string $message = null
    ) {
    }
}