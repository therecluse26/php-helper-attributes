<?php

namespace TheRecluse26\LaravelAttributes\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
class Transaction
{
    public function __construct(
        public ?string $connection = null
    ) {
    }
}