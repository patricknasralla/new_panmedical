<!DOCTYPE html>
<?php include("php_menu_logic.php") ?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  	<meta charset="utf-8">

  	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>CSS Test</title>
  	<meta name="description" content="">
	<meta name="author" content="PAN Medcial - Testing of CSS">

  	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
  	<meta name="viewport" content="width=960px,initial-scale=1">
  	
  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  	
  	<!-- CSS: implied media=all -->
  	<!-- CSS concatenated and minified via ant build script-->
  	<link rel="stylesheet" href="css/styletest.css">
  	<!-- end CSS-->
  	
  	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
  	
  	<!-- All JavaScript at the bottom, except for Modernizr / Respond.
  	     Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
  	     For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  	<script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

	<div id="content">
		<div id="image">
			<img id="topimg" src="img/placeholder.png" alt="Placeholder Image">
		</div>
		<div id="header">
			<div id="foo">	
				<img src="img/logo.png" alt="PAN Medical Logo">
				<?php echo(navigation("about us")) ?> <!-- navigation menu -->
			</div>	
		</div>
		<div id="main">
			<h1>InterV.</h1>
			<div class="section">
			<p>This is some paragraph text which references the main title. It can be any length but I'm going to settle with something like this for the purposes of this demonstration.</p>
			</div>	
			<h2>Features.</h2>
			<div class="section">
			<p>This is a paragraph that goes with the subheading. This will be a description of the product and will go a little something like this:</p>
			<p>This InterV from PAN Medical is so truly astounding that we almost decided not to release it as a product but rather present it to the United Nations as a method for the cessation of violence throughout the world.</p>
			<p>"How?" you ask. Well, the minds at PAN Medical realised early on that most of the world's problems stem from the simple fact that back irregularities cause most people to become cranky. It is this crankiness and not the more widely held view that religious and territorial disputes cause the world's woes.</p>
			<p>Using our new, ground-breaking and in no way stolen technique; the InterV will be able to cause instant cessation of back pain and single handedly will save the world from inevitable desruction.</p>
			<p>In fact, now that I've actually spent ages doing this, I've realised that the above reasoning is absolutely bollocks. Oh well. It's not like anyone reads placeholder text anyway...</p>
			</div>
			<div class="clear"></div>
		</div> 

	</div> <!-- eo content -->

  	
  	
  	
  	<!-- JavaScript at the bottom for fast page loading -->
  	
  	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
  	
  	
  	<!-- scripts concatenated and minified via ant build script-->
  	<script defer src="js/plugins.js"></script>
  	<script defer src="js/script.js"></script>
  	<!-- end scripts-->
  	
  	  
  	<!-- Change UA-XXXXX-X to be your site's ID -->
  	<script>
  	  	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
  	  	Modernizr.load({
  	  	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
  	  	});
  	</script>
  	
  	
  	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
  	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
  	<!--[if lt IE 7 ]>
  	  	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  	  	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  	<![endif]-->
  
</body>
</html>