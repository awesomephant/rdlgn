/* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-svg-cssclasses
 */
;window.Modernizr=function(a,b,c){function v(a){j.cssText=a}function w(a,b){return v(prefixes.join(a+";")+(b||""))}function x(a,b){return typeof a===b}function y(a,b){return!!~(""+a).indexOf(b)}function z(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:x(f,"function")?f.bind(d||b):f}return!1}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m={svg:"http://www.w3.org/2000/svg"},n={},o={},p={},q=[],r=q.slice,s,t={}.hasOwnProperty,u;!x(t,"undefined")&&!x(t.call,"undefined")?u=function(a,b){return t.call(a,b)}:u=function(a,b){return b in a&&x(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=r.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(r.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(r.call(arguments)))};return e}),n.svg=function(){return!!b.createElementNS&&!!b.createElementNS(m.svg,"svg").createSVGRect};for(var A in n)u(n,A)&&(s=A.toLowerCase(),e[s]=n[A](),q.push((e[s]?"":"no-")+s));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)u(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},v(""),i=k=null,e._version=d,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+q.join(" "):""),e}(this,this.document);



$('document').ready(function(){
	$('.show-honcode').click(function(){
		$('.honcode').toggleClass('active');
	})
	
	//STAFF PAGE FANCY FLIPOUT
	$('.employee').click(function(){
		$('body').addClass('details-active');
		$.get('frontpage.php', function(data) {
			$('.details').html(data);
			alert('Load was performed.');
		});
	});
	
	$('.details-active').click(function(){
		$(this).removeClass('details-active');
	});
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