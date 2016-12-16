<html>
	<head>
		<link href= "assets/css/styles.css" rel="stylesheet" type= "text/css"/>
		<?php
			$title= "User_Inf";
			require_once "assets/functions/functions.php";
			$user= getUser();
		?>
	</head>
	<body>
		<?php
			for($i=0; $i<count($user); $i++)
			{
				echo "div id=\"look_user_profile_page\">";
				echo '<div id= "user_profile_photo">
				<img id= "user_profile_img" src="assets/img/f_custom_pages/prof_pict.png"/>
				<button>Upload</button>
			</div>
			<div id= "us_page_form">
				<div class= "user_info_line">
					<div class="label_field">
						<label id= "user_profile_fio_label">ФИО: </label>
					</div>
					<div class= "user_profile_fields">
						<font id= "user_profile_fio_font">Some FIO</font>
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
		</div>';
			}
		?>
	
		

	</body>
</html>