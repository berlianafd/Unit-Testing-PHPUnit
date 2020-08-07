<?php
namespace App\Models;

class Player{
	public $name;
	public $games = [];

	public function __construct($name){
		$this->name = $name;
	}
	
	
	public function getName(){
		return $this-> name;
	}

	public function add($gameName){
		$this->games[] = $gameName;
	}
}
?>