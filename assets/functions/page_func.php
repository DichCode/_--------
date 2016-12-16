<?php
	$pages= array();
	$flag= false;
	$site_host= "http://".$_SERVER['SERVER_NAME']."/My_saitinushka_Current_Version";
	
	
	//if(isset($_GET('page')))
	//{
		//echo $_GET('page');
	//}
	
	function init()
	{
		add("/assets/pages/custom_pages/news_page_edit.php");
		add("/assets/pages/custom_pages/news_page.php");
		add("/assets/pages/custom_pages/category_list.php");
		add("/assets/pages/custom_pages/user_page_edit.php");
		add("/assets/pages/custom_pages/user_page.php");
	}
	
	function add($page_address)
	{
		global $pages;
		$pages[]= $page_address;
	}
	
	function open($page_address)
	{
		//echo "</br>1 <br/>";
		$flag= false;
		global $pages;
		global $site_host;
		//echo "</br> page_func.php: ".count($pages)."<br/>";
		for($i= 0; $i<count($pages); $i++)
		{
			//echo "</br>2 <br/>";
			//echo "$page_address == $pages[i] <br/>";
			if($pages[$i]== $page_address)
			{
				//header("Location: $site_host$pages[$i]");
				header("Location: http://localhost/My_saitinushka_Current_Version/$pages[$i]");
				//echo "Location: $site_host$pages[$i]";
				$flag= true;
				exit;
			}
		}
		if($flag)
		{
			echo 'Error 404';
		}
		/*foreach($page_address as $keyWord=>keyVal)
		{
			
		}*/
	}
	
	init();
	
	if(isset($_GET['curr_page'])) 
	{
		//echo $_GET['curr_page'];
		open($_GET['curr_page']);
		//header("Location: ".$_GET['page']);
	}
	
	/*$page_test= "/abc.php";
	
	add($page_test);
	open($page_test);*/

?>