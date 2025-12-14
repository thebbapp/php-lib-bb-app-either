<?php

declare(strict_types=1);

namespace BbApp\Either;

/**
 * Represents the right variant of an Either, typically used for success cases.
 *
 * @template-covariant R
 * @extends Either<never,R>
 */
final class Right extends Either
{
	/**
	 * Constructs a Right with the given value.
	 *
	 * @param R $value
	 */
	public function __construct($value)
	{
		parent::__construct($value);
	}

	/**
	 * Unwraps and returns the right value.
	 *
	 * @return R
	 */
	function unwrap()
	{
		return $this->value;
	}
}
