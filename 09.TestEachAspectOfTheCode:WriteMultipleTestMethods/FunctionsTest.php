<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require __DIR__ . '/functions.php';

final class FunctionsTest extends TestCase
{
	public function testaddTwoPositiveIntegers() : void
	{
		$this->assertSame(5, addIntegers(2, 3));
	}

	public function testaddTwoNegativeIntegers() : void
	{
		$this->assertSame(-5, addIntegers(-2, -3));
	}

	public function testaddPositiveAndNegativeIntegers() : void
	{
		$this->assertSame(5, addIntegers(-2, 7));
	}

	public function testaddZeroAndPositiveInteger() : void
	{
		$this->assertSame(5, addIntegers(0, 5));
	}

	public function testaddZeroAndNegativeInteger() : void
	{
		$this->assertSame(-5, addIntegers(0, -5));
	}

	public function testAddIntegersIsCommutative() : void
	{
		$this->assertSame(addIntegers(2, 6), addIntegers(3, 5));
	}
}