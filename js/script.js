$('document').ready(function(){
	$('.show-honcode').click(function(){
		$('.honcode').toggleClass('active');
	})
	
	
	var navLvl = 0;
	var addNavClass = function(){
		$('body').removeClass('nav-lvl-0');
		$('body').removeClass('nav-lvl-1');
		$('body').removeClass('nav-lvl-2');
		$('body').removeClass('nav-lvl-3');
		$('body').addClass('nav-lvl-' + navLvl);
	};

	$('.nav-main li a').click(function(){
		//e.preventDefault();
		if ( $(this).hasClass('active') ){
			$(this).removeClass('active');
			//navLvl -= 1;
		}
		
		else {
			$(this).addClass('active');
			navLvl += 1;
		}
		
		addNavClass();
		
		
	})
	
	$('.nav-main li:has(ul) > a').addClass('hasChild');
	
	$('.nav-back').click(function(){
		$('.active').removeClass('active');
		navLvl -= 1;
		addNavClass();
	});
	
	$('.nav-close').click(function(){
		$('body').removeClass('nav-active');
		$('.nav-main li a').removeClass('active');
	});
	
	$('.nav-active .page-container').click(function(){
		//window.alert('Hello World.');
		//$('body').removeClass('nav-active');
		//$('.nav-main li a').removeClass('active');
	});
	
	
	//$('header nav').hide();
	$('.toggleNav').click(function(){
		$('body').toggleClass('nav-active nav-lvl-0');
	});
	
	
	var ToC =
		"<nav role='navigation' class='table-of-contents'>" +
		"<h2>Auf dieser Seite:</h2>" +
		"<ul>";
	var newLine, el, title, link;

	$('.single h3, .page h3').each(function(){
		var h = $(this);
		var id = h.text().replace(/\s+/g, '-').toLowerCase();
		h.attr('id', id);
		
		title = h.text();
		link = "#" + id;
		
		 newLine =
			"<li>" +
			"<a href='" + link + "'>" +
			title +
			"</a>" +
			"</li>";
			
		ToC += newLine;
	});
	
	ToC +=
		"</ul>" +
		"</nav>";
		
	$(".toc").prepend(ToC);
	
	var todayDate = new Date();
	//window.alert(todayDate);
	/*$(.eventlist li time).each(function(){
		var eventDateStr = $(this).attr('datetime');
		var eventDateArr = expireDateStr.split("/");
		var eventDate = new Date(eventDateArr[2], eventDateArr[0], eventDateArr[1]);

		if(todayDate > eventDate){
			$(this).addClass('passed');
		}
	});*/
});