<html>
	<head>
		<link href= "/My_saitinushka_Current_Version/assets/css/styles.css" rel="stylesheet" type= "text/css"/>
	</head>
	<body>
	
		<?php				
			require_once "../../functions/page_func.php";
			
			$title= "Страница изменения новости";
		
			require "../header.php"; 
		
			require "../registration_form.php";

			require "../login_form.php";
			
			require "../body.php";
			
			//require "../bottom_side.php";
			
			//require "../footer.php";
		?>
		
			<?php			
			$mysqli= new mysqli("localhost", "root", "", "site_v1_bd");			
			if (!$mysqli) 
			{
				echo 'Невозможно соединиться: ' . mysqli_error();
			}
			//else
			//{
				if(isset($_POST["news_add"]))
				{
					//echo "Успешно соединено <br/>";
					$mysqli->query("SET NAMES 'utf8'");
					
					//$success= $mysqli->query("INSERT INTO `news` (`text`, `image`) VALUES (`".$_POST("news_info")."`, `../img/news_img/maxresdefault.jpg`)");
					$success= $mysqli->query("INSERT INTO `news` (`id`, `text`, `image`) VALUES (NULL, '".$_POST["news_info"]."', '../img/news_img/maxresdefault.jpg')");
					echo "res= ".$success;
				}
			//}
		?>
		
		<form name= "news_reg" action= "" method= "post">
			<div class= "body_block">
				<div id= "news_edit_page">
					<div id= "news_photo">
						<img id= "news_img" src="/My_saitinushka_Current_Version/assets/img/f_custom_pages/prof_pict.png"/>
						<button>Upload</button>
					</div>
					<div id= "news_info_fields">
						<br/>
						<div class= "news_info_line_ch">
							<div class= "news_label_field">	
								<label>Информация:</label>
							</div>
							<div class= "news_info_field">
								<textarea name= "news_info" id= "news_info">Info</textarea>
							</div>
						</div>
					</div>
				</div>
				<div id= "log_ok_button_place">
					<input type= "submit" name= "news_add" value= "ready"/>
				</div>
			</div>
		</form>
	</body>
</html>