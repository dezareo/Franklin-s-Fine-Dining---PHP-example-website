<?php
//Classes & Methods

class User {

	public $id
	private $username;
	public $email;
	public $password;

	public function __construct($username, $password){
		$this->username = $username;
		$this->password = $password;
	}
	public function register() {
		echo 'User Registered';
	}

	public function login() {
		$this->auth_user();
	}

	public function auth_user() {
		echo $this->username . ' is authenticated';
	}

	public function __destruct() {
		//echo 'Desctructor Called';
	}
}

$User = new User('admin', 'administrator');

echo $User->username;

//$User->register();
$User->login();