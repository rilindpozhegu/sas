<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="alrayan1">
<head>
    <title>Newton</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/Annotation 2019-05-29 105924.jpg">
    <meta name="theme-color" content="#272F34" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular-sanitize.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <script  src="{{url('js/base.min.js')}}"></script>
    <script src="{{url('v4 bootstrap/bootstrap/bootstrap.min.js')}}"></script>
    <script  src="{{url('js/app.js')}}"></script>
    <script src="/js/notify.js"></script>
    <link rel="stylesheet" href="{{url('v4 bootstrap/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/build.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/app.min.css')}}">
    
    @yield('title_and_meta')


</head>
<body ng-controller="HeaderCtrl" data-spy="scroll" data-target=".navbar" data-spy="affix">
<div class="header">
    @include('navbar.navbar')
</div>
<div>
    @yield('content')
</div>
@include('includes.footer')

<script>
$("#contactForm").submit(function(e) {

var url = "/mailer.php"; // the script where you handle the form input

$.ajax({
       type: "POST",
       url: url,
       data: $("#contactForm").serialize(), // serializes the form's elements.
       success: function(data)
       {
          $.notify(data, "success");
          document.getElementById("contactForm").reset();
       }
     });

e.preventDefault(); // avoid to execute the actual submit of the form.
});
</script>
<script>
	$(document).ready(function(){
		// Page Readt
		$(".colorLayer2").animate({left:"0px"},300);
		$(".image img").animate({left:"0px"},300);
		$(".colorLayer2").delay(200).animate({left:"100%"},500);
		$(".colorLayer2").delay(200).animate({width:"0px"},400);

		// ON SCROLL
		$(window).scroll(function(){
			
		if($(this).scrollTop() >= 0 && $(this).scrollTop() <= 13050)
		{
			$(".colorLayer3").delay(1400).animate({left:"0px"},300);
			$(".images").delay(1500).animate({left:"0px"});
			$(".colorLayer3").delay(400).animate({left:"100%"},300);
			$(".colorLayer3").delay(400).animate({width:"0px"},300);
			}
		});
	});
    </script>

<script>
	var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()-300,
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

</script>
</body>

</html>