<?php
include 'PDOMain.class.php';

class Children extends PDOMain{
	private $table;

	function mile_done($id_child){
		$process = $this->selectPDO("*","process","WHERE id_child='$id_child'");
		$mile = 0;
		foreach ($process as $proc) {
			$mile += $proc["mile"];
		}
		return $mile;

	}


}

?>