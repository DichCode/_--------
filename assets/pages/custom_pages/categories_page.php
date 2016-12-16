<html>
	<head>
		<link rel= "stylesheet" type= "text/css" href= "/My_saitinushka_Current_Version/assets/css/styles.css"/>
	</head>
	<body>
		<?php		
			require_once "../../functions/page_func.php";
			
			$title= "Страница категорий";
			
			require "../header.php"; 
		
			require "../registration_form.php";

			require "../login_form.php";
			
			//require "../bottom_side.php";
			
			//require "../footer.php";
		?>
		<div id= "cat_page">
	
			<div class= "cat" id= "first_cat">
							
			</div>
			<div id= "category_list">
				<ul type= "none" id= "category_list_in">
					<li>
						<div class= "cat">
							
						</div>
					</li>
					<li>
						<div class= "cat">
							
						</div>
					</li>
					<li>
						<div class= "cat" id= "f_line_end">
							
						</div>
					</li>
					<li>
						<div class= "cat">
							
						</div>
					</li>
					<li>
						<div class= "cat">
							
						</div>
					</li>
					<li>
						<div class= "cat">
							
						</div>
					</li>
				</ul>
			</div>
			<div class= "cat" id= "last_cat">
							
			</div>
		</div>
	</body>
</html>