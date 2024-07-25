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

		$mock_mailer->expects($this->once())
					->method('sendMessage')
					->with($this->equalTo('example@email.com'), $this->equalTo('Hello'))
					->willReturn(true);

		$user->setMailer($mock_mailer);

		$user->email = "example@email.com";

		$this->assertTrue($user->notify("Hello"));
	}


	public function testCannotNotifyUserWithNoMail() {

		$user = new User();

		$mock_mailer = $this->getMockBuilder(Mailer::class)
							->setMethods(null)
							->getMock();

		$user->setMailer($mock_mailer);

		$this->expectException(Exception::class);

		$user->notify("Hello");
	}

}