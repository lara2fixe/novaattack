<!DOCTYPE html>
<html lang="ru">
<head>
	
	<meta charset="utf-8">
	<title>{{ $title or '' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="assets/images/favicon.ico">
    
	<!-- CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="assets/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="assets/js/superfish.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets/js/owl.carousel.js" type="text/javascript"></script>
	<script src="assets/js/jquery.mb.YTPlayer.js" type="text/javascript"></script>
	<script src="assets/js/animate.js" type="text/javascript"></script>
	<script src="assets/js/jquery.BlackAndWhite.js"></script>
	<script src="assets/js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="assets/images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page" class="single_page">
	
		@yield('header')


		@yield('content')
	
	
		
	</div><!-- //PAGE -->
	
		@yield('footer')
	

</div>
</body>
</html>