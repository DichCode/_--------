<?php
	/*function printRes($result_set)
	{
		while(($row= $result_set->fetch_assoc())!= false)
		{
			print_r($row)."<br/>";
			//echo $row("login");
		}
		echo "Кол-во записей равно - ".$result_set->num_rows."<br/>";
	}
	$result= $mysqli->query("SELECT * FROM `users`");
	printRes($result);*/
?>

<html>
	<head>
		<link href= "/My_saitinushka_Current_Version/assets/css/styles.css" rel="stylesheet" type= "text/css"/>
	</head>
	<body>
		<?php		
			require_once "../../functions/page_func.php";
			
			$title= "Страница просмотра инфорации о пользователе";
			
			require "../registration_form.php";

			require "../login_form.php";
			
			require "../header.php"; 
			
			require "../body.php";

		//	require "../bottom_side.php";
			
			//require "../footer.php";
		?>			

			
		<div class= "body_block">
			<div id= "look_user_profile_page">
				<div id= "user_profile_photo">
					<img id= "user_profile_img" src="/My_saitinushka_Current_Version/assets/img/f_custom_pages/prof_pict.png"/>
					<button>Upload</button>
				</div>
				<div id= "us_page_form">
					<div class= "user_info_line">
						<div class="label_field">
							<label id= "user_profile_fio_label">ФИО: </label>
						</div>
						<div class= "user_profile_fields">
							<font id= "user_profile_fio_font">
								<?php
									//if (!isset($_SESSION['user_name'])){session_start();}
									//echo "Test2: ".$_SESSION["user_name"];
									//echo "Test4: ".$row["name"];
									
									if(isset($_SESSION["user_name"]))
									{
										echo $_SESSION["user_name"];
									}
									else
									{
										echo "Can\'t find user_name";
									}
								?>
	
	
							</font>
						</div>
					</div>
					<br/>
					<div class= "user_info_line">
						<div class="label_field">
							<label id= "user_profile_address_label">Адресс: </label>
						</div>
						<div class= "user_profile_fields">
							<font id= "user_profile_address_font">Some Address</font>
						</div>
					</div>
					<br/>
					<div class= "user_info_line">
						<div class="label_field">
							<label id= "user_profile_e-mail_label">e-mail: </label>
						</div>
						<div class= "user_profile_fields">
							<font id= "user_profile_e-mail_font">Some e-mail</font>
						</div>
					</div>			
		<br/>		
					<div class= "user_info_line">
						<div class="label_field">
							<label id= "user_profile_add_inf">Дополнительная информация:</label>
						</div>
						<font class= "user_profile_fields" id= "user_profile_additional_info">Additional info</font>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>