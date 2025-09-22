<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require __DIR__ . '/Person.php';

final class PersonTest extends TestCase
{
	public function testGetAndSetFirstName() : void
	{
		$person = new Person();
		$person->setFirstName('Tiago');

		$this->assertSame('Tiago', $person->getFirstName());
	}

	public function testGetAndSetSurName() : void
	{
		$person = new Person();
		$person->setSurname('Lemes');

		$this->assertSame('Lemes', $person->getSurname());
	}

	public function testGetFullName() : void
	{
		$person = new Person();
		$person->setFirstName('Tiago');
		$person->setSurname('Lemes');

		$this->assertSame('Tiago Lemes', $person->getFullName());
	}

}