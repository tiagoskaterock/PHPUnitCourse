<?php 

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

	public function testReturnsFullName() 
	{
		$user = new User();

		$user->first_name = "Tiago";
		$user->surname = "Bordin";

		$this->assertEquals("Tiago Bordin", $user->getFullName());
	}


	public function testFullNameIsEmptyByDefault() {
		$user = new User();
		$this->assertEquals('', $user->getFullName());
	}


	public function testNotificationIsSent()
	{
		$user = new User();

		$mock_mailer = $this->createMock(Mailer::class);

		$mock_mailer->method('sendMessage')
					->willReturn(true);

		$user->setMailer($mock_mailer);

		$user->email = "example@email.com";

		$this->assertTrue($user->notify("Hello"));
	}



}