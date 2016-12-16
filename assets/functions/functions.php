<?php
	$mydb= false;
	function connectDB()
	{
		global $mydb;
		$mydb= mysqli_connect("localhost","root","");
		mysqli_select_db("site_v1_bd",$mydb);
		mysqli_query("SET NAMES 'utf-8'");
	}
	function disconnectDB()
	{
		global $mydb;
		mysqli_close();
	}
	
	function getUser()
	{
		global $mydb;
		connectDB();
		$result= mysqli_query("SELECT * FROM 'site_v1_bd'");
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