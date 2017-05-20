<?php
class People{
	public $id;
	public $firstname;
	public $surname;
	public $age;
	public $gender;
	public $friends;
	public $id_friends;
	
	function __construct($id,$firstname,$surname,$age,$gender,$friends,array $id_friends){
		 $this->id = $id;
		 $this->firstname = $firstname;
		 $this->surname = $surname;
		 $this->age = $age;
		 $this->gender = $gender;
		 $this->friends = $friends;
		 $this->id_friends = $id_friends;
		
	}
}
?> 