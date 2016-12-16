<html>
	<head>
		<script src='/My_saitinushka_Current_Version/assets/js/jquery-3.1.1.min.js'></script>
		<script src= '/My_saitinushka_Current_Version/assets/js/javascript.js'></script>
		<link href= "/My_saitinushka_Current_Version/assets/css/styles.css" rel= "stylesheet" type= "text/css"/>
		<title><?php echo $title;?></title>
	</head>
	<body>
		<div id= "reg_log_links">
			<div id= "register" class= "reg_log_parts"><a href= "#" class= "reg_log_in">Register</a></div>
			<div id= "reg_log_slash" class= "reg_log_parts">/</div>
			<div id= "login" class= "reg_log_parts"><a href= "#" class= "reg_log_in">Login</a></div>
		</div>
		
		<div>
		
	<?php 
	//session_start(); 
	/*if(isset($_SESSION["user_name"]))
	{
		echo "Welcome user".$_SESSION["user_name"];
	}*/	
	
	if(isset($_SESSION["user_name"]))
	{
		echo "Welcome user: ";
		echo $_SESSION["user_name"];

	}
	?>
		
		</div>
		
		<div id= "menu_bar">
			<img src= "/My_saitinushka_Current_Version/assets/img/menu_form.png" class="block_img"/>
				<div id= "scroll_control">
					<a href= "#">
						<div id= "scroll_up">
						
						</div>
					</a>
					
					<a href= "#">
						<div id= "scroll_down">
						
						</div>
					</a>
				</div>
				<div id= "scroll_panel">
					<img src= "/My_saitinushka_Current_Version/assets/img/slides/1.jpg" width= "100%" height= "100%" class= "scrolled_img"/>
					<img src= "/My_saitinushka_Current_Version/assets/img/slides/2.png" width= "100%" height= "100%" class= "scrolled_img"/>
					<img src= "/My_saitinushka_Current_Version/assets/img/slides/3.png" width= "100%" height= "100%" class= "scrolled_img"/>
					<img src= "/My_saitinushka_Current_Version/assets/img/slides/4.jpg" width= "100%" height= "100%" class= "scrolled_img"/>
				</div>
				<div id= "scroll_links">
					<ul id= "scroll_link_links" type= "none">
						<li>
							<a href= "#"><div class= "scroll_link" id= "slide_one"></div></a>
						</li>
						<li>
							<a href= "#"><div class= "scroll_link" id= "slide_two"></div></a>
						</li>
						<li>
							<a href= "#"><div class= "scroll_link" id= "slide_three"></div></a>
						</li>
						<li>
							<a href= "#"><div class= "scroll_link" id= "slide_four"></div></a>
						</li>
					</ul>
				</div>
				<div id= "buttons_panel">
					<ul id= "button_menu" type= "none">
						<li>
							<a href= "#" id= "home_button_link">
								<div class= "panel_button_div">
									<img src= "/My_saitinushka_Current_Version/assets/img/buttons/home/home_relaxed.png" id= "home_button" class= "panel_buttons"/>
								</div>
							</a>
						</li>
						<li>
							<div id= "news_functional">
								<a href= "#" id= "news_button_link">
									<div class= "panel_button_div">
										<img src= "/My_saitinushka_Current_Version/assets/img/buttons/news/news_relaxed.png" id= "news_button" class= "panel_buttons">
									</div>
								</a>
								<ul class= "submenu" id= "news_submenu" type= "none">
									<li>
										<a href= "?curr_page=assets/pages/custom_pages/news_page_edit.php" class= "submenu_links" id= "sub1">sub1</a>
									</li>
									<li>
										<a href= "?curr_page=assets/pages/custom_pages/news_page.php" class= "submenu_links" id= "sub2">sub2</a>
									</li>
									<li>
										<a href= "?curr_page=assets/pages/custom_pages/user_page.php" class= "submenu_links" id= "sub3">sub3</a>
									</li>
									<li>
										<a href= "?curr_page=assets/pages/custom_pages/user_page_edit.php" class= "submenu_links" id= "sub4">sub4</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href= "#" id= "contacts_button_link">
							<div class= "panel_button_div">
								<img src= "/My_saitinushka_Current_Version/assets/img/buttons/contacts/contacts_relaxed.png" id= "contacts_button" class= "panel_buttons"></img>
							</div>
							</a>
						</li>
					</ul>
				</div>
		</div>
		<div id= "big_black_footer">
		
		</div>