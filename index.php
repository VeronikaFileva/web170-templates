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
        
		<!-- Recipe Area -->
        <section class="recipe">
			
			<!-- THE LOOP -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
			<h2>
				<a href="<?php the_permalink(); // link to the page or posting ?>">
				<?php the_title(); // get the page or posting title ?>
				</a>
			</h2>
			
			<?php the_content(''); // get page or posting written content ?>
			
			<?php endwhile; endif; // end the loop ?>
			<small>front-page.php</small>
		</section>
		
		<sidebar>
			<ul class="sub-navigation-items">
				<?php  if ($post->post_parent) { // if the page has a parent...
							wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // ...list the sub-pages with no title
						} else { // if the page does not have a parent...
							wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // ...list the sub-pages with no title
								} ?>
				</ul>
				<?php endif; // end if we are in "pages" ?>
				<?php if (!(is_page())) : // if we are not in "pages"... ?>
				<h2 class="sub-navigation-title">Blog</h2>
				<ul class="sub-navigation-items">
					<?php wp_list_categories(array('title_li' => __(''))); // ...list the categories with no title ?>
				</ul>
				<?php endif; ?>
			<br />
			<img src="<?php bloginfo('template_directory'); ?>/images/add.JPG" /><br />

		</sidebar>
       
 </main>   
    <!-- Footer -->
    
    <footer>
        <p id="footer">Healthy Yummy Smart<br />
                    All rights reserved.
        <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~  
            <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~</p>
    </footer>
    
 <!-- Navigation -->
   <script> 
	$(document).ready(function(){
		$("#mobile").click(function(){
			$("#menu").slideToggle("slow");
		});
	});
	</script>
	<script> 
	$(document).ready(function(){
		$(".dropbtn").click(function(){
			$(".dropdown-content").slideToggle("slow");
		});
	});
	</script>
	<script>
	function myFunction(x) {
		x.classList.toggle("change");
	}
	</script>
	<!-- WP Footer Starts -->
	<?php wp_footer(); ?>
	<!-- WP Footer Ends -->
</body>
</html>