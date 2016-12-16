		
<?php 
			session_start(); 
			//phpinfo();
			
			require_once "assets/functions/page_func.php";
			
			$mysqli= new mysqli("localhost", "root", "", "site_v1_bd");			
			if (!$mysqli) 
			{
				echo 'Невозможно соединиться: ' . mysqli_error();
			}			
			//echo "Успешно соединено <br/>";
			$mysqli->query("SET NAMES 'utf8'");
			
			//$mysqli->close();
			/*$mysqli= new mysqli("localhost", "root", "", "site_v1_bd");			
			//$mysqli = mysql_connect("localhost","root","");
			//mysql_select_db("site_v1_bd",$mysqli);
			if (!$mysqli) 
			{
				echo 'Невозможно соединиться: ' . mysqli_error();
			}
			//echo 'Успешно соединено';
			//mysqli_query("SET NAMES 'utf8'");
			//$mysqli->set_charset('utf8');
			//$mysqli->query("SET NAMES 'utf8'");
			
			//$success= $mysqli->query("INSERT INTO 'users' ('name', 'e-mail', 'address', 'additional_info', 'password') VALUES ('123', 'yjn@af.e', '".md5("123")."', 'smth', 'add_inf')");
			//$mysqli->query("SELECT * FROM users WHERE user_name='" . $_POST["reg_login"] . "' and password = '". $_POST["reg_pass"]."'");
			
			//echo "res= ".$success;
			//mysqli_close($mysqli);
			//$mysqli->close();
			
			
			echo "Успешно соединено <br/>";
			//mysqli_query("SET NAMES 'utf8'");
			//$mysqli->set_charset('utf8');
			$mysqli->query("SET NAMES 'utf8'");*/
			
			//$success= $mysqli->query("INSERT INTO 'users' ('name', 'e-mail', 'address', 'additional_info', 'password') VALUES ('123', 'yjn@af.e', 'smth', 'add_inf', '".md5("123")."')");//her'
			
			//$success= $mysqli->query("INSERT INTO `users` (`id`, `name`, `e-mail`, `address`, `additional_info`, `password`) VALUES (NULL, 'user2', '654', '456', '321', '123');");//work
			
			//$mysqli->query("SELECT * FROM users WHERE user_name='" . "aaaaaaaaa" . "' and password = '".md5("bbbbbbb")."'");
			
			//echo "res= ".$success;//work
			//mysqli_close($mysqli);
			//$mysqli->close();//work
  
			
			$title= "Главная страница";
			
			/*add("/assets/pages/custom_pages/news_page_edit.php");
			add("/assets/pages/custom_pages/news_page.php");
			add("/assets/pages/custom_pages/category_list.php");
			add("/assets/pages/custom_pages/cuser_page_edit.php");
			add("/assets/pages/custom_pages/user_page.php");
			
				echo "</br> index.php= ".count($pages)."<br/>";*/
			//open("/assets/pages/custom_pages/news_page.php");
			
			require "assets/pages/registration_form.php";

			require "assets/pages/login_form.php";			
			
			require "assets/pages/header.php"; 
			
			require "assets/pages/body.php";
			
			require "assets/pages/footer.php";
		?>