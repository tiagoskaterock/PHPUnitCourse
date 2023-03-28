<?php 

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
	function testAddingTwoPlusTwoResultsInFour() 
	{
		$this->assertEquals(4, 2 + 2);
	}

}