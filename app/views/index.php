<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Arkode | Game Studio</title>
	<meta name="description" content="Game Studio based in Semarang, Indonesia">
	<meta name="author" content="Arkode Studio">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="assets/img/icon24.png">

	<!-- CSS
  ================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/site/base.css">
	<link rel="stylesheet" href="assets/css/site/skeleton.css">
	<link rel="stylesheet" href="assets/css/site/layout.css">
	<link rel="stylesheet" href="assets/css/site/slimmenu.css">
	<link rel="stylesheet" href="assets/css/site/flexslider.css">
	<link rel="stylesheet" href="assets/css/site/superslides.css">


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Javascript
  ================================================== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="assets/js/site/jquery.sticky.js" type="text/javascript"></script>
	<script src="assets/js/site/jquery.smooth-scroll.min.js"></script>
	<script src="assets/js/site/snap.svg-min.js"></script>
	

</head>
<body>

	<div class="bg" id="intro">
		<div id="slides">
		    <div class="slides-container">
		    <?php $i = 1;?>
              @foreach($image as $item)
              	<!-- <img src="<?php echo URL::to('assets/img/slider/.$item[slider]'); ?>"> -->
              	<img src="<?php echo URL::to('assets/img/slider/slider1.png'); ?>">
              	<img src="<?php echo URL::to('assets/img/slider/slider2.png'); ?>">
              	<img src="<?php echo URL::to('assets/img/slider/slider-c.jpg'); ?>">
              <?php $i++; ?>
              @endforeach
		    	
		    </div>

		    <div class="slides-navigation">
		      <a href="#" class="next"></a>
		      <a href="#" class="prev"></a>
		    </div>
		    	
  		</div>
	</div> <!-- end intro -->

	<nav>
        <ul id="navigation" class="slimmenu">
            <li><a href="#about">About</a></li>
			<li><a href="#portofolio">Portofolio</a></li>
			<li><a href="#intro"><img src="<?php echo URL::to('assets/img/nav.png'); ?>"></a></li>
			<li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div id="about">
		<div class="container">
			<div class="sixteen columns">
				<h2><span class="lines">About</span></h2>
			</div> <!-- end sixteen columns -->
						
			<div class="clear"></div>

			<div class="six columns center">
				<img class="about-img" src="<?php echo URL::to('assets/img/about-logo.png'); ?>">
			</div> <!-- end sixteen columns -->

			<div class="ten columns center">
				<?php $dt = DB::table('about')->where('id_about', 1)->first(); ?>
				<p><br><br><?php echo $dt->content; ?></p>	
			</div> <!-- end sixteen columns -->

		</div> <!-- end container -->
	</div> <!-- end services -->

	<div id="separator1">
		<div class="bg2"></div>
		<p class="separator">Just like an arrow,</p>
	</div>

	<div id="portofolio">
		<div class="container">
			<div class="sixteen columns">
				<h2><span class="lines">Portofolio</span></h2>
			</div> <!-- end sixteen columns -->

			<div class="clear"></div>			
			
			<section id="grid" class="grid clearfix">
    		<a href="<?php echo URL::to('games/matematikan-redesign'); ?>" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="<?php echo URL::to('assets/img/games/game1.png'); ?>">
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>Matematikan</h2>
							<p>Re:Design</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="<?php echo URL::to('assets/img/games/default.png'); ?>">
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>The adv. of Tupee</h2>
							<p>Coming soon</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="<?php echo URL::to('assets/img/games/default.png'); ?>">
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>Si Miyo</h2>
							<p>Coming soon</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="<?php echo URL::to('assets/img/games/default.png'); ?>">
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>Perang Samudera</h2>
							<p>Coming soon</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>	
			</section>

		</div> <!-- end container -->
	</div> <!-- end services -->

	<div id="separator2">
		<div class="bg3"></div>
		<p class="separator">we glide to target our mission.</p>
	</div>

	<div id="team">
		<div class="container">
			<div class="sixteen columns">
				<h2><span class="lines">Team</span></h2>
			</div> <!-- end sixteen columns -->
						
			<div class="clear"></div>

			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="one-third column center">
							<img src="<?php echo URL::to('assets/img/team/team7.png'); ?>" width="150" height="150" alt="">
							<h3>Qori</h3>
                        	<h3 class="small">Programmer</h3>
                        	<!--<p>An alien. Living on earth.</p>-->
                        	<ul class="social-buttons">
			                  <li><a href="https://www.facebook.com/profile.php?id=100000879542586&fref=ts" class="social-btn center"><img src="assets/img/icn-facebook.png"></a></li>
			                  <li><a href="https://twitter.com/madqori" class="social-btn center"><img src="assets/img/icn-twitter.png"></a></li>
			                  <li><a href="#" class="social-btn center"><img src="assets/img/icn-gplus.png"></a></li>
                			</ul>
						</div>
					
						<div class="one-third column center">
							<img src="<?php echo URL::to('assets/img/team/team4.png'); ?>" width="150" height="150" alt="">
							<h3>Bagus</h3>
                        	<h3 class="small">Programmer</h3>
                        	<!--<p>An alien. Living on earth.</p>-->
                        	<ul class="social-buttons">
			                  <li><a href="https://www.facebook.com/ardiawanbagus?fref=ts" class="social-btn center"><img src="assets/img/icn-facebook.png"></a></li>
			                  <li><a href="#" class="social-btn center"><img src="assets/img/icn-twitter.png"></a></li>
			                  <li><a href="#" class="social-btn center"><img src="assets/img/icn-gplus.png"></a></li>
                			</ul>
						</div>
					
						<div class="one-third column center">
							<img src="<?php echo URL::to('assets/img/team/team5.png'); ?>" width="150" height="150" alt="">
							<h3>Damar</h3>
							<h3 class="small">Programmer</h3>
                        	<!--<p>An alien. Living on earth.</p>-->
                        	<ul class="social-buttons">
			                  <li><a href="https://www.facebook.com/damar.indera?fref=ufi" class="social-btn center"><img src="assets/img/icn-facebook.png"></a></li>
			                  <li><a href="#" class="social-btn center"><img src="assets/img/icn-twitter.png"></a></li>
			                  <li><a href="#" class="social-btn center"><img src="assets/img/icn-gplus.png"></a></li>
                			</ul>
						</div>
					</li>
					<li>
						<div class="one-third column center">
							<img src="<?php echo URL::to('assets/img/team/team6.png'); ?>" width="150" height="150" alt="">
							<h3>Mahdan</h3>
                        	<h3 class="small">Designer</h3>
                        	<!--<p>A vintage creature.</p>-->
                        	<ul class="social-buttons">
			                  <li><a href="https://www.facebook.com/mahdanlailain?fref=ufi" class="social-btn center"><img src="assets/img/icn-facebook.png"></a></li>
			                  <li><a href="#" class="social-btn center"><img src="assets/img/icn-twitter.png"></a></li>
			                  <li><a href="#" class="social-btn center"><img src="assets/img/icn-gplus.png"></a></li>
		                	</ul>
						</div>
					</li>

					<li>
						<div class="one-third column center">
							<img src="<?php echo URL::to('assets/img/team/team1.png'); ?>" width="150" height="150" alt="">
							<h3>Haris</h3>
							<h3 class="small">CEO</h3>
                        	<!--<p>A game designer. And also, an astronomer.</p>-->
                        	<ul class="social-buttons">
			                  <li><a href="https://www.facebook.com/HarisPraba" class="social-btn center"><img src="assets/img/icn-facebook.png"></a></li>
			                  <li><a href="https://twitter.com/HarisPrabaA" class="social-btn center"><img src="assets/img/icn-twitter.png"></a></li>
			                  <li><a href="#" class="social-btn center"><img src="assets/img/icn-gplus.png"></a></li>
		                	</ul>
						</div>
					
						<div class="one-third column center">
							<img src="<?php echo URL::to('assets/img/team/team2.png'); ?>" width="150" height="150" alt="">
							<h3>Patrick</h3>
							<h3 class="small">COO</h3>
                        	<!--<p>An alien. Living on earth.</p>-->
                        	<ul class="social-buttons">
			                  <li><a href="https://www.facebook.com/profile.php?id=1783861940&fref=ts" class="social-btn center"><img src="assets/img/icn-facebook.png"></a></li>
			                  <li><a href="https://twitter.com/patricknugros" class="social-btn center"><img src="assets/img/icn-twitter.png"></a></li>
			                  <li><a href="#" class="social-btn center"><img src="assets/img/icn-gplus.png"></a></li>
		                	</ul>
						</div>
					
						<div class="one-third column center">
							<img src="<?php echo URL::to('assets/img/team/team3.png'); ?>" width="150" height="150" alt="">
							<h3>Ucup</h3>
                        	<h3 class="small">CTO</h3>
                        	<!--<p>An alien. Living on earth.</p>-->
                        	<ul class="social-buttons">
			                  <li><a href="https://www.facebook.com/moyuba29?fref=ts" class="social-btn center"><img src="assets/img/icn-facebook.png"></a></li>
			                  <li><a href="https://twitter.com/MoYuBa29" class="social-btn center"><img src="assets/img/icn-twitter.png"></a></li>
			                  <li><a href="#" class="social-btn center"><img src="assets/img/icn-gplus.png"></a></li>
		                	</ul>
						</div>
					</li>

				</ul>
			</div> <!-- end teamSlider -->

		</div> <!-- end container -->
	</div> <!-- end services -->

	<div id="separator3">
		<div class="bg4"></div>
		<p class="separator">"Arkode Studio"</p>
	</div>

	<div id="contact">
		<div class="container">
			<div class="sixteen columns">
				<h2><span class="lines">Contact</span></h2>
			</div> <!-- end sixteen columns -->
						
			<div class="clear"></div>

			<div class="contact-details">

				<div class="one-third column center">
					<div class="light-box box-hover">
						<img src="assets/img/icn-address.png">
                  		<h2><span>Address</span></h2>
                  		<img src="assets/img/contact-lines.png">
                  		<p>Jatingaleh No.47, Semarang</p>
                	</div>
				</div>

				<div class="one-third column center">
					<div class="light-box box-hover">
						<img src="assets/img/icn-phone.png">
                  		<h2><span>Phone</span></h2>
                  		<img src="assets/img/contact-lines.png">
                  		<p>(024) 76920488</p>
                	</div>
				</div>

				<div class="one-third column center">
					<div class="light-box box-hover">
						<img src="assets/img/icn-email.png">
                  		<h2><span>E-mail</span></h2>
                  		<img src="assets/img/contact-lines.png">
                  		 <p><a href="#">arkodestudio@gmail.com</a></p>
                	</div>
				</div>

				<div class="sixteen columns center">
					<ul class="social-buttons">
	                  <li><a href="https://www.facebook.com/ArKodeStudio?hc_location=timeline" class="social-btn center"><img src="assets/img/icn-facebook.png"></a></li>
	                  <li><a href="http://twitter.com/arkodestudio" class="social-btn center"><img src="assets/img/icn-twitter.png"></a></li>
	                  <li><a href="https://plus.google.com/u/0/101968525050129752814" class="social-btn center"><img src="assets/img/icn-gplus.png"></a></li>
                	</ul>
				</div> <!-- end sixteen columns -->

				

			</div>

		</div> <!-- end container -->
	</div> <!-- end services -->

	<div id="blog">
		<div class="container">
			<!-- <div class="sixteen columns cl-effect-9 center ">
				
					<a href="#"><span>BLOG</span><span>Go on. Have a peek.</span></a>
				
			</div>

			<div class="clear"></div> -->

			<div class="sixteen columns">
				<div class="copyright">
					<p class="small">&copy; 2014. Arkode Studio. All Rights Reserved.</p>
				</div><!-- end copyright-->
			</div><!-- end sixteen columns-->

			<div class="clear"></div>

		</div> <!-- end container -->
	</div> <!-- end services -->

	<!-- Superslides
	================================================== -->
	<script src="assets/js/site/jquery.animate-enhanced.min.js" type="text/javascript"></script>
	<script src="assets/js/site/hammer.min.js" type="text/javascript"></script>
	<script src="assets/js/site/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>

	<script>
    $('#slides').superslides({
      animation: 'fade'
    });
  	</script>

	<!-- Misc settings (sticky nav, flexslider)
	================================================== -->
    <script type="text/javascript"> 
        jQuery(document).ready(function() {
            jQuery("nav").sticky({topSpacing:0});
            
            jQuery('.flexslider').flexslider({
                animation: "slide",
                slideshow: false,
                slideshowSpeed: 3500,
                animationSpeed: 1000
            });
        });      
    </script>
    
    <!-- Nav menu
	================================================== -->
	<script src="assets/js/site/jquery.slimmenu.min.js" type="text/javascript"></script>
    <script src="assets/js/site/jquery.easing.1.3.js" type="text/javascript"></script>

    <script type="text/javascript">
        $('ul.slimmenu').slimmenu({
            resizeWidth: '800',
            collapserTitle: 'Main Menu',
            easingEffect:'easeInOutQuint',
            animSpeed:'medium',
            indentChildren: true,
            childrenIndenter: '&raquo;'
        });
    </script>

    <!-- smooth scroll -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('nav a').smoothScroll();
            $('nav a').click(function(event) {
                event.preventDefault();
                var link = this;
                $.smoothScroll({
                scrollTarget: link.hash
                });
            });
        });
    </script>

    <!-- FlexSlider -->
  <script src="assets/js/site/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false
  });
});
  </script>

    <!-- codrops animation -->
    <script>
			(function() {
	
				function init() {
					var speed = 300,
						easing = mina.backout;

					[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
						var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
							pathConfig = {
								from : path.attr( 'd' ),
								to : el.getAttribute( 'data-path-hover' )
							};

						el.addEventListener( 'mouseenter', function() {
							path.animate( { 'path' : pathConfig.to }, speed, easing );
						} );

						el.addEventListener( 'mouseleave', function() {
							path.animate( { 'path' : pathConfig.from }, speed, easing );
						} );
					} );
				}

				init();

			})();
		</script>
<!-- End Document
================================================== -->
</body>
</html>