<!doctype html> 
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>BBS Crawler</title><link rel="shortcut icon" href="img/favicon.ico" />
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
				
		<!-- JS -->
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/tabs.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/jquery.columnizer.min.js"></script>
		
		<!-- Isotope -->
		<script src="js/jquery.isotope.min.js"></script>
		
		<!-- Lof slider -->
		<script src="js/jquery.easing.js"></script>
		<script src="js/lof-slider.js"></script>
		<link rel="stylesheet" href="css/lof-slider.css" media="all"  /> 
		<!-- ENDS slider -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  /> 
		<script src="js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- JCarousel -->
		<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" media="screen" href="css/carousel.css" /> 
		<!-- ENDS JCarousel -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

		<!-- modernizr -->
		<script src="js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="css/skin.css"/>
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="css/lessframework.css"/>
		
		<!-- jplayer -->
		<link href="player-skin/jplayer-black-and-yellow.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
		
		<!-- flexslider -->
		<link rel="stylesheet" href="css/flexslider.css" >
		<script src="js/jquery.flexslider.js"></script>
		
		
	</head>
	
	
	<body>
	
		<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				
				<div id="logo">
					<a href="index.html"><img  src="img/logo.png" alt="Simpler" width="480px" height="56px"></a>
				</div>
				
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li><a href="index.html"><span>HOME</span></a></li>
					<!--
					<li><a href="blog.html">BLOG</a></li>
					-->
					<li><a href="page.html">ABOUT</a>
					<!--
						<ul>
							<li><a href="page-elements.html">Elements</a></li>
							<li><a href="page-icons.html">Icons</a></li>
							<li><a href="page-typography.html">Typography</a></li>
						</ul>
						-->
					</li>
					<!--
					<li class="current-menu-item"><a href="portfolio.html">WORK</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					-->
				</ul>
				<div id="combo-holder"></div>
				<!-- ends nav -->

			</div>
		</header>
		<!-- ENDS HEADER -->
		
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
			
				
			<!-- portfolio content-->
        	<div id="portfolio-content" class="cf">        	
				
				
				
				
				<!-- project pager -->
				<div class="project-pager cf">
					<a class="previous-project" href="project8.php">&#8592; Previous project</a>
					<a class="next-project" href="project10.php">Next project &#8594;</a>
				</div>
				<!-- ENDS project pager -->
					
					
					<!-- project box -->
				<div id="project-box" class="cf">
				
				
					
				
				
					<!-- slider -->
					
					<div class="project-slider">
				       <!-- 
					   <div class="flexslider">
						  <ul class="slides">
						    <li>
						      <img src="img/dummies/slides/01.jpg" alt="alt text" />
						    </li>
						    <li>
						      <img src="img/dummies/slides/02.jpg" alt="alt text" />
						    </li>
						    <li>
						      <img src="img/dummies/slides/03.jpg" alt="alt text" />
						    </li>
						  </ul>
						</div>
						-->
					</div>
					
		        	<!-- ENDS slider -->

					
					<div class="info">
					
	        			<p><strong>Sourse </strong>PTT VideoCard</p>
	        			<p><strong>Date </strong> <?php echo date("Y-m-d H:i:s");?></p>
					</div>
					
	        		
	        		<!-- entry-content -->
	        		<div class="entry-content">
	        		
	        			<h2 class="heading">VideoCard</h2>
	        			
	        			<div class="multicolumn">
						<?php 
						require_once('simple_html_dom.php');
						$html = file_get_html('https://www.ptt.cc/bbs/VideoCard/index.html');
						$result = $html->find('div.title');
						//foreach($result as $v) {echo $v->outertext . '<br>';}
						foreach($result as $v)
						{
														
							//echo $v->outertext . '<br>';
							$str_sec = explode(" 			 				",$v);
							foreach($str_sec as $i)
							{
								$str_sec1 = explode(" 			 			",$i);
								foreach($str_sec1 as $j)
								{
									//fwrite($fp, $j."\r\n");
									$j = preg_replace('/a href="/','a href="https://www.ptt.cc',$j);
									echo $j . "</br>";
									
								}
							}
						}  						
					?>
	        			</div>
	        		</div>
	        		<!-- ENDS entry content -->
	        		
	        	</div>
		    	<!-- ENDS project box -->
					
					
				<!-- related -->
				<div class="related-projects">
					<h4 class="related-heading">Related projects</h4>
					<div class="related-list cf">
						
						
						<figure>
							<a href="project4.php" class="thumb"><img src="img/dummies/featured/04.jpg" alt="Alt text" /></a>
							<a href="project4.php" class="heading">PC_Shopping</a>
						</figure>
						<figure>
							<a href="project1.php" class="thumb"><img src="img/dummies/featured/01.jpg" alt="Alt text" /></a>
							<a href="project1.php" class="heading">HardwareSale</a>
						</figure>
						<figure>
							<a href="project2.php" class="thumb"><img src="img/dummies/featured/02.jpg" alt="Alt text" /></a>
							<a href="project2.php" class="heading">PowerColor</a>
						</figure>
					</div>
				</div>
				<!-- ENDS related -->
									
				
    		</div>
    		<!-- ENDS portfolio content-->
			
			
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		
		
		<!-- FOOTER -->
		<footer>
			<div class="wrapper cf">
			
				<!-- widgets -->
				<!--
				<ul  class="widget-cols cf">
					<li class="first-col">
						
						<div class="widget-block">
							<h4>RECENT POSTS</h4>
							<div class="recent-post cf">
								<a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
								</div>
							</div>
							<div class="recent-post cf">
								<a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
								</div>
							</div>
							<div class="recent-post cf">
								<a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
								<div class="post-head">
									<a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
								</div>
							</div>
						</div>
					</li>
					
					<li class="second-col">
						
						<div class="widget-block">
							<h4>ABOUT</h4>
							<p>Folder it's completely free this means you don't have to pay anything <a href="http://luiszuno.com/blog/license" tar >read license</a>.</p> 
							<p>Visit <a href="http://templatecreme.com/" >Template Creme</a> and find the most beautiful free templates up to date.</p>
						</div>
						
					</li>
					
					<li class="third-col">
						
						<div class="widget-block">
							<div id="tweets" class="footer-col tweet">
		         				<h4>TWITTER WIDGET</h4>
		         			</div>
		         		</div>
		         		
					</li>
					
					<li class="fourth-col">
						
						<div class="widget-block">
							<h4>CATEGORIES</h4>
							<ul>
								<li class="cat-item"><a href="#" >Design</a></li>
								<li class="cat-item"><a href="#" >Photo</a></li>
								<li class="cat-item"><a href="#" >Art</a></li>
								<li class="cat-item"><a href="#" >Game</a></li>
								<li class="cat-item"><a href="#" >Film</a></li>
								<li class="cat-item"><a href="#" >TV</a></li>
							</ul>
						</div>
		         		
					</li>	
				</ul>
				-->
				<!-- ENDS widgets -->	
				
				
				<!-- bottom -->
				<div class="footer-bottom">
					<div class="left">Contact：<a href="mailto:tdf5843@hotmail.com">tdf5843@hotmail.com</a></div>
						<ul id="social-bar" class="cf sb">
							<li><a href="http://www.facebook.com"  title="Become a fan" class="facebook">Facebbok</a></li>
							<li><a href="http://www.twitter.com" title="Follow my tweets" class="twitter"></a></li>
							<li><a href="http://plus.google.com" title="Enter my circles" class="plus"></a></li>
						</ul>
				</div>	
				<!-- ENDS bottom -->
			
			</div>
		</footer>
		<!-- ENDS FOOTER -->
		
	</body>
	
	
	
</html>