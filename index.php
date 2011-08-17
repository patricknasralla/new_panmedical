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

	<title>PAN Medical</title>
  	<meta name="description" content="PAN Medical Ltd: your partner in healthcare. Manufacturer and supplier of angioplasty, stent and kyphoplasty technologies for the medical industry.">
	<meta name="author" content="PAN Medcial Ltd.">

  	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
  	<meta name="viewport" content="width=960px,initial-scale=1">
  	
  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  	
  	<!-- CSS: implied media=all -->
  	<!-- CSS concatenated and minified via ant build script-->
  	<link rel="stylesheet" href="css/style.css">
  	<!-- end CSS-->
  	
  	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
  	
  	<!-- All JavaScript at the bottom, except for Modernizr / Respond.
  	     Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
  	     For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  	<script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

  	<div id="container">
		<header>
      <div id="positiondiv">
  			<img class="logo" src="img/logo.png" width="220" height="103" alt="Logo">
  			<?php echo(navigation("about us")) ?> <!-- navigation menu -->
      </div>
  	</header>

		<div id="main" role="main">
			<div id="top_image">
				
			</div>
			<div id="content">
				<section>
					<h1>About PAN Medical</h1>
					<p>Pan Medical is an innovative designer and manufacturer of high quality medical products, specialising in catheter and stent technology.</p>
					<h2>History</h2>
					<p>The company was formed in 1988, initially specialising in Interventional Radiology devices.</p>
					<p>Pan Medical has since grown dramatically – expanding the range of products into the specialist areas of Interventional Cardiology and Vascular Surgery.</p>
					<p>More recently, Pan Medical has expanded its expertise and product range into the field of Gastroenterology.</p>
					<p>A dynamic and inventive company, Pan Medical has enjoyed international success, and its global operations stretch around the world.</p>
					<p>Pan Medical is proud to announce that it has recently celebrated its 20th anniversary and hopes to continue to go from strength to strength in the next 20 to come.</p>
					<h2>Quality Policy</h2>
					<p>Our goal is to continually supply high quality medical devices to healthcare professionals the world over and to ensure that these products fully comply to both international and national regulatory and customer requirements. All our devices are manufactured in compliance to the Council Directive 93/42/EEC.</p>
					<h2>Products</h2>
					<p>A specialist in balloon catheter and stent devices, Pan Medical has gained an ever increasing share in the marketplace for over 19 years.</p>
					<p>With extensive experience in the design, development and manufacture of premium quality medical devices, the product range continues to grow.</p>
					<p>All products supplied by Pan Medical undergo strict quality control to ensure complete customer satisfaction.</p>
					<p>Pan Medical commits to Research and Development of new products, in addition to the current wide range on offer – aiming to be at the forefront of technological advances.</p>
					<p>Our Customer Service department is on hand to offer further details on any of our products – for more information, please contact us.</p>
					<h2>Standards</h2>
					<p>Pan Medical has long been accustomed to operating in a highly regulated environment with regards to design and development of medical products.</p>
					<p>All Pan Medical devices are manufactured to the highest possible standards and have been bearing the CE mark since 1996 – demonstrating compliance with the Medical Device Directive 93/42/EEC.</p>
					<p>The Pan Medical Quality Management System is certified according to and regularly audited against EN ISO 13485 (2003). It is this commitment to Quality Assurance which enables us to serve and satisfy all our customers’ expectations.</p>
					<p>Pan Medical is both JPAL registered and an FDA approved supplier.</p>
					<h2>Location</h2>
					<p>Pan Medical’s global headquarters are based in Gloucestershire in the United Kingdom.</p>
					<p>We are located in a very accessible part of the country, within easy reach of major motorway networks, train and bus routes, and airports.</p>
				</section> 
			</div> <!-- eo content -->
			
		</div>
		<div class='clearfix'></div>
		<footer>
			<p id="copyright">&copy; PAN Medical 2011, all rights reserved.</p>
			<p id="humans"><a href="humans.txt">humans.txt</a></p>
		</footer>
	</div> <!-- eo #container -->
  	
  	
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
