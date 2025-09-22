<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require __DIR__ . '/functions.php';

final class FunctionsTest extends TestCase
{
	public function testaddIntegers() : void
	{
		$this->assertSame(5, addIntegers(2, 3));
		$this->assertSame(10, addIntegers(5, 5));
		$this->assertSame(-10, addIntegers(-5, -5));
		$this->assertSame(0, addIntegers(7, -7));
	}

}