<?php

declare(strict_types=1);

namespace BbApp\Either;

/**
 * Represents the left variant of an Either, typically used for error cases.
 *
 * @template-covariant L
 * @extends Either<L,never>
 */
final class Left extends Either
{
    /**
     * Constructs a Left with the given value.
     *
     * @param L $value
     */
    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Unwraps and returns the left value.
     *
     * @return L
     */
    function unwrap()
    {
        return $this->value;
    }
}
