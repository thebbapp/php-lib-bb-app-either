<?php

declare(strict_types=1);

namespace BbApp\Either;

/**
 * Represents a value that can be either a Left or Right variant.
 *
 * @template L
 * @template R
 * @var L|R $value
 */
abstract class Either
{
    protected $value;

    /**
     * Constructs an Either with the given value.
     *
     * @param L|R $value
     */
    protected function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Unwraps and returns the contained value.
     *
     * @return L|R
     */
    abstract function unwrap();
}
