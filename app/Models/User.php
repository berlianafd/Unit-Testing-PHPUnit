<?php
namespace App\Models;

class User{
	public $name;
	public $hobby = [];
	public $phone;
	public $height;
	public $weight;


	public function __construct($name){
		$this->name = $name;
	}
	
	
	public function getName(){
		return $this-> name;
	}

	public function addHobby($hobby){
		$this->hobby[] = $hobby;
	}

	public function addPhone($phone){
		$this->phone = $phone;
	}

	public function addHeight($height){
		$this->height = $height;
	}

	public function addWeight($weight){
		$this->weight = $weight;
	}
}
?>