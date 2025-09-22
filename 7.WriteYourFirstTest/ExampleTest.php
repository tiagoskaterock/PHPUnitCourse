<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
	public function testTwoValuesAreTheSame() : void
	{
		$num1 = 5;
		$num2 = 5;
		$this->assertSame($num1, $num2);
	}

}