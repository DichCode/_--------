<html>
	<head>
		<script src='/My_saitinushka_Current_Version/assets/js/jquery-3.1.1.min.js'></script>
		<script src= "/My_saitinushka_Current_Version/assets/js/javascript.js"></script>
		<link href= "/My_saitinushka_Current_Version/assets/css/styles.css" rel="stylesheet" type= "text/css"/>
	</head>
	<body>
		<?php
			$title= "Страница просмотра новости";
			
			require_once "../../functions/page_func.php";
					
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
			//echo "Успешно соединено <br/>";
			$mysqli->query("SET NAMES 'utf8'");
			
			//$mysqli->query("INSERT INTO 'users' ('tex')");
		?>
		<div class= "body_block">
			<div id= "news_read_page">
				<div id= "news_photo">
					<img id= "news_img" src="../../img/f_custom_pages/prof_pict.png"/>
				</div>
				<div id= "news_info_fields">
					<div id= "news_title"><font>Sample_Text</font></div>
					<div id= "news_page_date_us">
						<font id="news_date">123</font>
						<div class= "news_news_poster">
							<font style= "float:left;">Пользователь: </font>
							<font>Пользователь</font>
						</div>
					</div>
					<div class= "news_info_line_r">
						<font>Some INFO</font>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>