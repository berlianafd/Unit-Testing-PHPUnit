<?php
use PHPUnit\Framework\TestCase;
use App\Models\Player;

class PlayerTest extends TestCase{
	
	//TDD
	//Test Driven Development

	public $player;

	public function setUp() : void{
		$this->player = new Player('Yan');
	}
  
	/** @test */
	public function checkPlayerName(){
		$this->assertEquals($this->player->getName(), 'Yan');
		
	}

	/** @test */
	public function hasNoGameAsDefault(){
		$this->assertEmpty($this->player->games);
	}

	/** @test */
	public function addGame(){
		$this->player->add('PUBG');
		$this->assertCount(1,$this->player->games);
	}

	/** @test */
	public function gameInList(){
		$this->player->add('PUBG');
		$this->player->add('Valorant');
		$this->assertContains('PUBG',$this->player->games);
	}

	/** @test */
	public function gameNotInList(){
		$this->player->add('PUBG');
		$this->player->add('Valorant');
		$this->assertNotContains('Mobile Legend',$this->player->games);
	}
}

?> 