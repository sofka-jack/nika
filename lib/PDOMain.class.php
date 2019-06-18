<?php 
class PDOMain{
	
	private $MPDO;

	function __construct($dbmame ="wth", $host="localhost", $user="root", $password=""){
		$this->MPDO = new PDO("mysql:host={$host}; dbname=wth", "{$user}", "{$password}");
		return $this->MPDO;
	}
 
	function selectPDO($cols, $db, $where="", $order="", $limit=""){
		$sql = "SELECT {$cols} FROM {$db} {$where} {$order} {$limit}";
		$rs = $this->MPDO->query($sql);
		$rs->execute();
		if($where != ""){
			$row = $rs->fetchAll(PDO::FETCH_ASSOC);
			return $row;
		}else{
			$row = $rs->fetchAll(PDO::FETCH_ASSOC);
			return $row;
		}
	}

	function insertPDO($db,  $cols="", $values=""){
		$sql = "INSERT INTO `{$db}` ({$cols}) values  ({$values})";
		$this->MPDO->query($sql);
	}

	function updatePDO($db,  $what, $val, $where){
		$sql = "UPDATE '{$db}' SET {$what}='{$val}' {$where}";
		$this->MPDO->query($sql);
	}

	function deletePDO($db, $where){
		$sql = "DELETE FROM '{$db}' {$where}";
		return $this->MPDO->query($sql);
	}
}
?>