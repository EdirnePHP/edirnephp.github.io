<?
	include "class/script.class.php";
	$s = new Script();
	
	
	//Google Font
	$s->css("https://fonts.googleapis.com/css?family=PT+Mono");
	$s->css("css/themify-icons.css");
	$s->css("css/icomoon-icons.css");
	$s->css("css/bootstrap.css");
	$s->css("css/owl.carousel.min.css");
	$s->css("css/owl.theme.default.min.css");
	$s->css("css/magnific-popup.css");
	$s->css("css/easy-responsive-tabs.css");
	$s->css("css/style.css");
    $s->css("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
	
	//Modernizr
	$s->js("js/modernizr-2.6.2.min.js");
	$s->js("js/respond.min.js");
	
	//Google Analytics
	include "analytics.php";
?>

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">