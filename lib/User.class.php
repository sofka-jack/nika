<?php
require 'PDOMain.class.php';

class User extends PDOMain{
	private $table;

	/*function __construct($table){
		parent::__construct();
		$this->table=$table;
	}*/

	function get_user_by_login($login){
		$user=$this->selectPDO( "*", "users WHERE mail='$login'");
		if(count($user) > 0) return $user;
		else return 0;
	}

	function add_user_to_bd($name, $surname, $date, $code, $email, $mile, $password, $segments, $points){
		$this->insertPDO( "users", "`name`,`surname`,`data`, `code_belavia`, `mail`, `mile`, `password`, `segments`, `points`", "'$name', '$surname', '$date', '$code', '$email', '$mile', '$password', '$segments', '$points'");
	}

	function help_child($login){
		$id_user=$this->selectPDO("id_user","users","WHERE mail='$login'");
		$id_user=$id_user[0]["id_user"];
		$children = $this->selectPDO("*","process","WHERE id_user='$id_user'");
		if(count($children) > 0) return $children;
		else return 0;
	}

	function mile_done($id_child){
		$process = $this->selectPDO("*","process","WHERE id_child='$id_child'");
		$mile = 0;
		foreach ($process as $proc) {
			$mile += $proc["mile"];
		}
		return $mile;
	}

	function new_user_mile($id_user, $new_user_mile){
		$this->updatePDO("users", "mile", "$new_user_mile", "WHERE id_user='$id_user'");
	}

	function want_to_help($id_child, $id_user, $mile, $new_user_mile) {
		$this->new_user_mile($id_user, $new_user_mile);
		$this->insertPDO("process","`id_user`, `id_child`, `mile`","'$id_user', '$id_child', '$mile'");

	}

}

?>