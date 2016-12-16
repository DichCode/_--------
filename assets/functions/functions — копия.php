<?php
	$mysqli= false;
	function connectDB()
	{
		global $mysqli;
		$mysqli= new mysqli("localhost", "root", "", "site_v1_bd");
		$mysqli->query("SET NAMES 'utf-8'");
	}
	function disconnectDB()
	{
		global $mysqli;
		$mysqli->close();
	}
	
	function getUser()
	{
		global $mysqli;
		connectDB();
		$result= $mysqli->query("SELECT * FROM 'site_v1_bd'");
		disconnectDB();
		return resultToArray($result);
	}
	function resultToArray($result)
	{
		$array= array();
		/*while(($row= $result->mysqli_fetch_assoc())!= false)*/
		/*while(!$result)*/
		while(($row= $result->mysqli_fetch_assoc())!= false)
		{
			$array[]= $row;
		}
		return $array;
	}
?>