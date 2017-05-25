<?php get_header(); ?>
    
  		<section class="pictures">
            <div id="first"><a href="snacks.html" ><h3 id="firsttext" class="label">Snacks</h3><img class="round" src="<?php bloginfo('template_directory'); ?>/images/snacks1.jpg" alt="Snacks" /></a></div>
            <div id="second"><a href="soups.html" ><h3 id="secondtext" class="label">Soups</h3><img class="round" src="<?php bloginfo('template_directory'); ?>/images/soups1.jpg" alt="Soups" /></a></div>
            <div id="third"><a href="salads.html" ><h3 id="secondtext" class="label">Salads</h3><img class="round" src="<?php bloginfo('template_directory'); ?>/images/salads1.jpg" alt="Salads" /></a></div>
            <div id="fourth"><a href="hotmeals.html" ><h3 id="thirdtext" class="label">Hot Meals</h3><img class="round" src="<?php bloginfo('template_directory'); ?>/images/hotmeal1.jpg" alt="Hot Meals" /></a></div>
            <div id="fifth"><a href="desserts.html" ><h3 id="thirdtext" class="label">Desserts</h3><img class="round" src="<?php bloginfo('template_directory'); ?>/images/dessert1.jpg" alt="Desserts" /></a></div>
        </section>
        
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
			
			<h3>Check out the latest posts:</h3>
				<?php rewind_posts(); // stop loop one ?>
				<?php query_posts('showposts=2'); // give directions to loop two ?>
				<?php while (have_posts()) : the_post(); // start loop two ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; // end loop two ?>
			<br />
			<small>front-page.php</small>
		</section>
		
<?php get_sidebar(); ?>
       
<?php get_footer(); ?>