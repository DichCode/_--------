<?php
//session_start(); 
/*function session_Print()
{
	echo "session_Print:";
	echo $_SESSION["user_name"];
}*/

function resAccess($result_set)
{
	while(($row= $result_set->fetch_assoc())!= false)
	{
		//echo "<br/>res= ";
		print_r ($row);
		//echo $row["name"];
		//$_SESSION["user_name"]= $row["name"];
		$_SESSION["user_name"]= $row["name"];
		echo "<br/>Login form knows:";
		echo $_SESSION["user_name"]."<br/>";
		//session_Print();
		
		//$name= $_SESSION["user_name"];
		if(isset($_SESSION["user_name"]))
		{
			header("Location: assets/pages/custom_pages/user_page.php?".session_name().'='.session_id());
		}
	}
}

$mysqli= mysqli_connect("localhost", "root", "", "site_v1_bd");

if(!$mysqli)
{
	echo 'Невозможно соединиться: ' . mysqli_error();
}
//else echo 'Соединение состоялось ';

$mysqli->query("SET NAMES 'utf8'");


if(isset($_POST["log_done"]))
	{
		//session_start();
		
		//echo "<br/>".$_POST["log_log"]."<br/>";
		//echo "<br/>".md5($_POST["log_pass"])."<br/>";
		$result= $mysqli->query("SELECT * FROM `users` WHERE `name` = '".$_POST["log_log"]."' AND `password` = '".md5($_POST["log_pass"])."'");
		if($result==true)
		{
			resAccess($result);
		}
		else
		{
			
		}
		/*$message="";
		if(count($_POST)>0) 
		{
			$result = $mysqli->query("SELECT * FROM users WHERE name='" . $_POST["log_log"] . "' and password = '". $_POST["log_pass"]."'");
			//echo $result[0];
			print_r($result)."<br/>";
			$row  = mysqli_fetch_array($result);
			if(is_array($row)) 
			{
				$_SESSION["id"] = $row[id];
				$_SESSION["name"] = $row[name];
			} 
			else 
			{
				$message = "Invalid Username or Password!";
			}
		}
		if(isset($_SESSION["user_id"])) {
		//header("Location:user_dashboard.php");
		}*/
	}

	//$mysqli->close();
?>


		<form name= "authorization" action= "" method= "post">
			<div id= "log_win">
				<div id= "log_form">
						<div id= "log_form_inside">
							<div class= "log_field">
								<div class= "log_field_ls">
									<label>Login:</label>
								</div>
								<div class= "log_field_rs">
									<input name= "log_log" type= "text" placeholder= "Login" checked= "checked"/>
								</div>
							</div>
							<div class= "log_field">
								<div class= "log_field_ls">
									<label>Password:</label>
								</div>
								<div class= "log_field_rs">
									<input name= "log_pass" type= "text" placeholder= "Password" checked= "checked"/>
								</div>
							</div>
						</div>
						<div id= "log_ok_button_place">
							<input type= "submit" name= "log_done" value= "ready"/>
						</div>
				</div>
			</div>
		</form>