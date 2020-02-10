<?php
class DBController {
	private $host = "localhost";
	private $user = "em07614";
	private $password = "fPgejllt";
	private $database = "em07614";
	private $em07614;
	
	function __construct() {
		$this->em07614 = $this->connectDB();
	}
	
	function connectDB() {
		$em07614 = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $em07614;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->em07614,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->em07614,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>
