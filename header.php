<!doctype html>
<html lang="en">
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8" />
    <meta name="robots" content="no index, no follow" />
    <meta name="viewport" content="width=device-width" /><!-- Responsive Website -->
    
    <!-- Styles-->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
    <link href="<?php bloginfo('template_directory'); ?>/nav.css"  rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lobster|Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    
   
    <!--Social Media Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JQuery Library for Navigation -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
  	
	<!-- start WP Head -->
	<?php wp_head(); ?>
	<!-- end WP Head -->
</head>
<body <?php body_class(); ?>>
	
	<!-- Navigation -->
	
	<div id="navigation">
    <!-- Responsive Navigation -->
    	<div id="mobile" onclick="myFunction(this)">
			<div class="container">
  				<div class="bar1"></div>
  				<div class="bar2"></div>
  				<div class="bar3"></div>
			</div>
			 <!--here type what you want to appear next to the hamburger icon or leave empty-->
		</div>
	
	<?php wp_nav_menu( array( 'theme-location' => 'main-menu', 'container' => 'ul id="menu"', 'items_wrap' => '<ul id="menu" class="%2$s">%3$s</ul>', ) ); ?>
	</div>
    
    <main>
      
        <section class="green">
            <img class="leftimage" src="<?php bloginfo('template_directory'); ?>/images/salads.jpg" alt="Meal of the day!" />
            
           <article class="righttext">
            <h1 id="brand">Healthy Yummy Smart</h1>
				<br />
            <p class="welcome">The best vegetarian, vegan and pescitarian recipes on the web! Cook smart! Feel great!</p> 
			</article>
        </section>
