<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65283040-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-65283040-1');
</script>
    <!--jQuery for the elsewhere map-->
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxEApjYoIRFi1UuPHpv0h1tLGZmfyxHrw">
    </script>
    <script async src="JS/infobubble.js"></script>
    <script async src="JS/infobox.js"></script>
	<meta charset="utf-8">
	<!-- Meta settings for Bootstrap to work appropriately-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Local CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/TEPStyle.css">
	<!-- Latest compiled JavaScript -->
	<!-- jQuery Library -->
	<script type="text/javascript" src="JS/jquery-2.1.4.js">
	</script>
	<script src='http://platform.twitter.com/widgets.js'>window.twttr = (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0],
	    t = window.twttr || {};
	  if (d.getElementById(id)) return t;
	  js = d.createElement(s);
	  js.id = id;
	  js.src = "https://platform.twitter.com/widgets.js";
	  fjs.parentNode.insertBefore(js, fjs);
 
	  t._e = [];
	  t.ready = function(f) {
	    t._e.push(f);
	  };
 
	  return t;
	}(document, "script", "twitter-wjs"));
	</script>
<!-- Stuff for the slider-->
 	<link href="bootstrap-3.3.5-dist/css/full-slider.css" rel="stylesheet">
	
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!--jQuery that's happening inside the landing page-->
	<script type="text/javascript">
	$(document).ready(function() {
		// Stuff to do as soon as the DOM is ready;
		$("#elsewhereButton").click(function(){
			// Act on the event
			$("html").fadeOut(function () {
			
			location="TEPmap.php";
		});
	});
/*Buttons for mailing list*/
		$("#mailing-button-detail").click(function(){
		    $(".mailing-list-map").animate({bottom: '60px'});
		});
		$("#close-mailing-list").click(function(){
		    $(".mailing-list-map").animate({bottom: '-425px'});
		});  
	});
	</script>
<!--head stuff for mailchimp-->
	<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	</style>
    <link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
    <link rel="ICON" href="favicon.ico" type="image/ico" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<title>
	Elsewhere: Social Journalism
</title>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<div class="container-fluid">

