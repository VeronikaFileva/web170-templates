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
        <ul id="menu">
            <li>
				<a href="#" class="active">Home</a>
			</li>
            <li class="dropdown">
                <a class="dropbtn">Recipes</a>
                <div class="dropdown-content" >
                    <a href="hats.html">Soups</a>
                    <a href="gloves.html">Salads</a>
                    <a href="shoes.html">Snacks</a>
                    <a href="pumpkins.html">Hot Meals</a>
					<a href="desserts.html">Desserts</a>
                </div>
            </li>
            <li>
				<a href="#">Blog</a>
			</li> 
			<li>
				<a href="#">Tips</a>
			</li> 
			<li>
				<a href="#">Contact</a>
			</li> 
        </ul>
   </div>
    <main>
      
        <section class="green">
            <img class="leftimage" src="images/salads.jpg" alt="Meal of the day!" />
            
            <article class="righttext">
            	<h2>Tomato Mozzarella Salad</h2>
                <h3>Ingredients</h3>
                <p class="ingredients">5 Vine Tomatoes<br />
               	   1 Mozzarella Cheese<br />
                   1 TbSp Pesto Sauce <br />
                   Fresh Basil<br />
                   Pink Salt<br />
             
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