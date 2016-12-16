<html>
	<head>
		<link href= "/My_saitinushka_Current_Version/assets/css/styles.css" rel="stylesheet" type= "text/css"/>
	</head>
	<body>
		<?php		
			require_once "../../functions/page_func.php";
			
			$title= "Страница изменения инфорации о пользователе";
			
			require "../header.php"; 
		
			require "../registration_form.php";

			require "../login_form.php";
			
			require "../body.php";

			//require "../bottom_side.php";
			
			//require "../footer.php";
		?>
		
			<?php 
	//session_start(); 
	/*if(isset($_SESSION["user_name"]))
	{
		echo "Welcome user".$_SESSION["user_name"];
	}*/	
	if(isset($_SESSION["user_name"]))
	{
		echo "<br/>2Welcome user: ";
		echo $_SESSION["user_name"];

	}
	?>
	
		<div class= "body_block">
			<div id= "edit_user_profile_page">
				<div id= "user_profile_photo">
					<img id= "user_profile_img" src="/My_saitinushka_Current_Version/assets/img/f_custom_pages/prof_pict.png"/>
					<button>Upload</button>
				</div>
				<div id= "us_ed_page_form">
					<div class= "user_info_line">
						<div class="label_field">
							<label>ФИО: </label>
						</div>
						<div class= "user_profile_fields">
							<input name= "user_profile_fio" class= "user_profile_fields_field"/>
						</div>
					</div>
					<br/>
					<div class= "user_info_line">
						<div class="label_field">
							<label>Адресс: </label>
						</div>	
						<div class= "user_profile_fields">
							<input name= "user_profile_address" class= "user_profile_fields_field"/>
						</div>
					</div>
					<br/>
					<div class= "user_info_line">
						<div class="label_field">
							<label>e-mail: </label>
						</div>
						<div class= "user_profile_fields">
							<input name= "user_profile_email" class= "user_profile_fields_field"/>
						</div>
					</div>
					<br/>
					<div class= "user_info_line">
						<div class="label_field">	
							<label>Дополнительная информация:</label>
						</div>	
						<div class= "user_profile_fields" id= "user_additional_info_field_id">
							<textarea name= "user_profile_additional_info" id= "user_profile_additional_info" class= "user_profile_fields_field">Additional info</textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>