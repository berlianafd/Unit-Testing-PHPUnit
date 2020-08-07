<?php
use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserDataTest extends TestCase{
	
	//TDD
	//Test Driven Development

	public $user;

	public function setUp() : void{
		$this->user = new User('Yan');
	}
  
	/** @test */
	public function checkNameOfUser(){
		$this->assertEquals($this->user->getName(), 'Yan');
		
	}

	/** @test */
	public function hasNoPhoneAsDefault(){
		$this->assertEmpty($this->user->phone);
	}

	/** @test */
	public function addPhone(){
		$this->user->addPhone('085123456789');
		$this->assertIsString('085123456789');
	}

	/** @test */
	public function phoneVerification(){
		$this->assertContainsOnly('int', [999888]);
	}

	/** @test */
	public function hasNoHeight(){
		$this->assertEmpty($this->user->height);
	}

	/** @test */
	public function addHeight(){
		$this->user->addHeight(165);
		$this->assertIsNumeric(165);
	}

	/** @test */
	public function hasNoWeight(){
		$this->assertEmpty($this->user->weight);
	}

	/** @test */
	public function addWeight(){
		$this->user->addWeight(60.4);
		$this->assertIsFloat(60.4);
	}

	/** @test */
	public function hasNoHobby(){
		$this->assertEmpty($this->user->hobby);
	}

	/** @test */
	public function addHobby(){
		$this->user->addHobby('Traveling');
		$this->assertCount(1,$this->user->hobby);
	}

	/** @test */
	public function hobbyInList(){
		$this->user->addHobby('Traveling');
		$this->user->addHobby('Climbing');
		$this->assertContains('Climbing',$this->user->hobby);
	}
}

?> 