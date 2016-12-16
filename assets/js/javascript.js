jQuery(document).ready(function() 
{	
	var home_button_flag= true;
	var news_button_flag= true;
	var news_submenu_button_flag= false;
	var news_submenu_button_slide_flag= false;
	var contacts_button_flag= true;
	var butt_freez= true;
	
	var log_flag= true;
	
	var curr_scroll_pos= 0;
	var slide_amount= 3;
	var bred= 1;
	
	/*custom_pages_js_BEGIN*/
			/*alert('ready');*/
		var temp_date = new Date();
		/*day = temp_date.getDate();
		month = temp_date.getMonth()+1;
		year = temp_date.getYear();*/
		jQuery('#news_date').html(temp_date);
		//jQuery('#date').html(day+"/"+month+"/"+year);
	/*custom_pages_js_END*/
	
	/*jQuery('#reg_window').hide();*/
	
	jQuery('#reg_window').hide();
	jQuery('#news_submenu').hide();
	jQuery('#log_win').hide();
	
	/*//changed by routing
	
	jQuery('#news_edit_page').hide();
	jQuery('#news_read_page').hide();
	jQuery('#edit_user_profile_page').hide();
	jQuery('#look_user_profile_page').hide();
	
	//document.getElementById('reg_window').display= 'none';
	
	jQuery("#sub1").on('click', function()
	{
		jQuery('#news_edit_page').show();
		jQuery('#news_read_page').hide();
		jQuery('#edit_user_profile_page').hide();
		jQuery('#look_user_profile_page').hide();
	});
	
	jQuery("#sub2").on('click', function()
	{
		jQuery('#news_edit_page').hide();
		jQuery('#news_read_page').show();
		jQuery('#edit_user_profile_page').hide();
		jQuery('#look_user_profile_page').hide();
	});
	
	jQuery("#sub3").on('click', function()
	{
		jQuery('#news_edit_page').hide();
		jQuery('#news_read_page').hide();
		jQuery('#edit_user_profile_page').show();
		jQuery('#look_user_profile_page').hide();
	});
	
	jQuery("#sub4").on('click', function()
	{
		jQuery('#news_edit_page').hide();
		jQuery('#news_read_page').hide();
		jQuery('#edit_user_profile_page').hide();
		jQuery('#look_user_profile_page').show();
	});*/
	
	/*jQuery('#login').on('click', function()
	{
		/*alert(bred);
		//if(bred== 1)
		{*/
			/*jQuery('#log_win').slideToggle(1000);*/
		/*	jQuery('#log_win').show();
			jQuery('#log_win').animate(
			{
				"width" : "toggle"
			},
			2000);
			bred= 0;
		}
		else
		{
			
		}
		jQuery('#log_win').show();
	});*/
	
	jQuery('#login').on('click', function()
	{
			alert('asd');
			//jQuery('#log_win').slideToggle(1000);
			if(log_flag== true)
			{
				jQuery('#log_win').show();
				log_flag= false;
			}
			else
			{
				jQuery('#log_win').hide();
				log_flag= true;
			}
	});
	
	jQuery('#register').on('click', function()
	{	
		alert('asd2');
		jQuery('#reg_window').show();
	});
	
	jQuery('#reg_exit_link').on('click', function()
	{
		jQuery('#reg_window').hide();
	});
	
	jQuery('#scroll_up').on('click', function()
	{
		if(curr_scroll_pos<0)
		{
			curr_scroll_pos += 100; 
		}
		else
		{
			curr_scroll_pos = -(slide_amount*100);
		}
		jQuery('.scrolled_img').animate(
		{
			"top":curr_scroll_pos+"%"
		},
		2000);
	});
	
	jQuery('#scroll_down').on('click', function()
	{
		if(curr_scroll_pos> -(100*slide_amount))
		{
			curr_scroll_pos -= 100; 
		}
		else
		{
			curr_scroll_pos= 0;
		}
		jQuery('.scrolled_img').animate(
		{
			"top": curr_scroll_pos+"%"/*,
			"left":"-20%"*/
		},
		2000);
		
		/*jQuery('#scroll_panel').animate(
		{
			"top": "-25%"
		},
		1000);*/
	});
	
	jQuery('#slide_one').on('click', function()
	{
		curr_scroll_pos= 0;
		jQuery('.scrolled_img').animate(
		{
			"top": curr_scroll_pos+"%"
		},
		2000);
	});
	
	jQuery('#slide_two').on('click', function()
	{
			curr_scroll_pos= -100;
			jQuery(".scrolled_img").animate(
			{
				"top": curr_scroll_pos+"%"
			},
			2000);
	});
	
	jQuery('#slide_three').on('click', function()
	{
		curr_scroll_pos= -200;
		jQuery('.scrolled_img').animate(
		{
			"top": curr_scroll_pos+"%"
		},
		2000);
	});
	
	jQuery('#slide_four').on('click', function()
	{
		curr_scroll_pos= -300;
		jQuery('.scrolled_img').animate(
		{
			"top": curr_scroll_pos+"%"
		},
		2000);
	});
	/*var slider = {
	slides:['1.jpg','2.png','3.png','4.jpg'],
	frame:0, // текущий кадр для отбражения - индекс картинки из массива
	set: function(image) { // установка нужного фона слайдеру
		document.getElementById("scroll_panel").style.backgroundImage = "url("+image+")";
		document.getElementById("scroll_panel").style.backgroundSize = "100% 100%";
	},
	init: function() { // запуск слайдера с картинкой с нулевым индексом
		this.set(this.slides[this.frame]);
	},
	left: function() { // крутим на один кадр влево
		this.frame--;
		if(this.frame < 0) this.frame = this.slides.length-1;
		this.set(this.slides[this.frame]);
	},
	right: function() { // крутим на один кадр вправо
		this.frame++;
		if(this.frame == this.slides.length) this.frame = 0;
		this.set(this.slides[this.frame]);		
	}
};

window.onload = function() { // запуск слайдера после загрузки документа
	slider.init();
	setInterval(function() { // ставим пятисекундный интервал для перелистывания картинок
		slider.right();
	},5000);
}*/
	
	
	

	/*jQuery('#news_submenu').hide();*/
	/*document.getElementById('#news_submenu').display= 'block';*/
	
	jQuery('#home_button_link').on('click', function()
	{
		/*alert(home_button_flag);*/
		if(home_button_flag==true)
		{
			document.getElementById('home_button').src= '/My_saitinushka_Current_Version/assets/img/buttons/home/home_hoovered.png';
			home_button_flag= false;
		}
		else if(home_button_flag==false)
		{
			document.getElementById('home_button').src= '/My_saitinushka_Current_Version/assets/img/buttons/home/home_relaxed.png';
			home_button_flag=true;
		}
	});
	
	jQuery('#news_button_link').on('click', function()
	{
		//alert('press1');
		if(news_button_flag== true)
		{
			//alert('press2');
			document.getElementById('news_button').src= '/My_saitinushka_Current_Version/assets/img/buttons/news/news_hovered.png';
			/*if(news_submenu_button_slide_flag== false)
			{*/
				news_button_flag= false;
				news_submenu_button_flag= false;
			/*}*/				
		}
		else if(news_button_flag== false)
		{
			//alert('press3');
			document.getElementById('news_button').src= '/My_saitinushka_Current_Version/assets/img/buttons/news/news_relaxed.png';
			news_button_flag= true;
			news_submenu_button_flag= true;
		}
		
		if(news_submenu_button_flag== false)
		{
			butt_freez= false;
		}
		else if(news_submenu_button_flag== true)
		{
			//jQuery('#news_submenu').slideToggle(1000);
			butt_freez= true;
		}

		/*if(news_submenu_button_flag== false)
		{
			//document.getElementById('news_submenu').show();
			jQuery('#news_submenu').slideToggle(500);
			//alert('press4');
		}
		else if(news_submenu_button_flag== true)
		{
			jQuery('#news_submenu').hide();
		}*/
	});
	
	jQuery('#contacts_button_link').on('click', function()
	{
		if(contacts_button_flag== true)
		{
			document.getElementById('contacts_button').src= '/My_saitinushka_Current_Version/assets/img/buttons/contacts/contacts_hovered.png';
			contacts_button_flag= false;
		}
		else if(contacts_button_flag== false)
		{
			document.getElementById('contacts_button').src= '/My_saitinushka_Current_Version/assets/img/buttons/contacts/contacts_relaxed.png';
			contacts_button_flag= true;
		}
	});
	
	/*function onContactsClick()
	{
		alert('alive');
		if(contacts_button_flag== true)
		{
			document.getElementById('contacts_button').src= 'assets/img/buttons/contacts/contacts_hovered.png';
			contacts_button_flag= false;
		}
		else if(contacts_button_flag== false)
		{
			document.getElementById('contacts_button').src= 'assets/img/buttons/contacts/contacts_relaxed.png';
			contacts_button_flag= true;
		}
	}*/
	
	function handler(event)
	{
		if(event.type== 'mouseover')
		{
			/*alert('on');*/
			news_submenu_button_slide_flag= true;
		}
		else if(event.type== 'mouseout')
		{
			/*alert('out');*/
			news_submenu_button_slide_flag= false;
		}
		
		if(butt_freez== true)
		{
			if(news_submenu_button_slide_flag== true)
			{
				//document.getElementById('news_submenu').show();
				jQuery('#news_submenu').slideToggle(500);
				//alert('press4');
			}
			else if(news_submenu_button_slide_flag== false)
			{
				jQuery('#news_submenu').slideToggle(1000);
			}
		}
	}
	
	document.getElementById('news_button_link').onmouseover= document.getElementById('news_button_link').onmouseout= handler;
	
	/*jQuery('#scroll_up').on('click', function()
	{
		slider.right();
	});
	
	jQuery('#scroll_down').on('click', function()
	{
		slider.left();
	});*/

	jQuery('.submenu_links').on('mouseover', function()
	{
		//alert("yap");
		jQuery('#news_submenu').show();
	});	
});

	/*var home_button= getElementById('home_button_link');*/
	
	/*function press_hb()
	{
		document.all.home_button.src= "home_hoovered.png";
	}*/
	
	//jQuery('home_button').on('click', press_hb);*/
	
	
	/*jQuery('home_button').on('click', function home_press()
	{
		jQuery('home_button').src= ;home_hoovered.png';
	});*/