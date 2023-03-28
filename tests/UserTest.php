<?php 

use PHPUnit\Framework\TestCase;

require 'User.php';

class UserTest extends TestCase
{
	function testReturnsFullName() 
	{

		$user = new User();

		$user->first_name = "Tiago";
		$user->surname = "Bordin";

		$this->assertEquals("Tiago Bordin", $user->getFullName());
	}

	function testFullNameIsEmptyByDefault() {
		$user = new User();
		$this->assertEquals('', $user->getFullName());
	}

}