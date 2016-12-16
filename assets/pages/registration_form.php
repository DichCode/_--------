<?php
	/*$mysqli= new mysqli("localhost", "root", "", "site_v1_bd");			
	if (!$mysqli) 
	{
		echo 'Невозможно соединиться: ' . mysqli_error();
	}			
	echo "Успешно соединено <br/>";
	$mysqli->query("SET NAMES 'utf8'");*/
	
	$mysqli= mysqli_connect("localhost", "root", "", "site_v1_bd");
	
	if(!$mysqli)
	{
		echo 'Невозможно соединиться: ' . mysqli_error();
	}
	
	$mysqli->query("SET NAMES 'utf8'");
	
	if(isset($_POST["reg_done"]))
	{
		//$mysqli->query("SET NAMES 'utf8'");
				

		//$success= $mysqli->query("INSERT INTO `users` (`id`, `name`, `e-mail`, `address`, `additional_info`, `password`) VALUES (NULL, 'user2', '654', '456', '321', '123');");//work
				
		//$success= $mysqli->query("INSERT INTO `users` (`id`, `name`, `e-mail`, `address`, `additional_info`, `password`) VALUES (NULL, '".$_POST["reg_login"]."', '".$_POST["reg_e-mail"]."', 'none, 'none', '".$_POST["reg_pass"]."');");//work
		//$success= $mysqli->query("INSERT INTO `users` (`id`, `name`, `e-mail`, `address`, `additional_info`, `password`) VALUES (NULL, '".$_POST["reg_login"]."', '654', '456', '321', '123');");
		
		//$pass= $_POST[md5("reg_pass")];
		$success= $mysqli->query("INSERT INTO `users` (`id`, `name`, `e-mail`, `address`, `additional_info`, `password`) VALUES (NULL, '".$_POST["reg_login"]."', '".$_POST["reg_e-mail"]."', 'none', 'none', '".md5($_POST["reg_pass"])."');");
		
			
		//echo "res= ".$success;//work;
		//$mysqli->close();
		//$mysqli->close();
	}
?>

<html>
	<head>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src= 'assets/js/javascript.js'></script>
		<link rel= "stylesheet" type= "text/css" href= "assets/css/style_registration.css" />
	</head>
	<body>
		<form name= "registration" action= "" method= "post">
			<div id= "reg_window">
				<div id= "reg_bg">
				</div>
				
				<div id= "reg_exit_link"><a href="#">X</a></div>
				
				<div id= "reg_form">
					<ul type= "none" id= "reg_form_list">
						<li>
							<div class= "reg_fields">
								<div class= "reg_form_ls">
									<label>Login:</label>
								</div>
								<div class="reg_form_rs">
									<input type= "text" checked= "checked" name= "reg_login"/>
								</div>
							</div>
						</li>
						<li>
							<div class= "reg_fields">
								<div class= "reg_form_ls">
									<label>E-mail:</label>
								</div>
								<div class="reg_form_rs">
									<input type= "text" checked= "checked" name= "reg_e-mail"/>
								</div>
							</div>
						</li>
						<li>
							<div class= "reg_fields">
								<div class= "reg_form_ls">
									<label>Password:</label>
								</div>
								<div class="reg_form_rs">
									<input type= "text" checked= "checked" name= "reg_pass"/>
								</div>
							</div>
						</li>
					</ul>
					<div id= "reg_ok_button_place">
						<input type= "submit" name= "reg_done" value= "ready"/>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>