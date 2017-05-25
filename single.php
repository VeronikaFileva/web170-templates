<?php get_header(); ?>
        
		<!-- Recipe Area -->
        <section class="recipe">
			
			<!-- THE LOOP -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
			<article id="<?php the_ID(); ?>" class="post">
			<h2>
				<a href="<?php the_permalink(); // link to the page or posting ?>">
				<?php the_title(); // get the page or posting title ?>
				</a>
			</h2>
			<small>Posted on <?php the_time('F j, Y'); //gets the time ?> by <?php the_author(); //shows author ?> in <?php the_category(', '); //shows the category ?> </small>
			<br />
			<br />
			<?php the_post_thumbnail( 'medium' ); ?>
			
			<?php the_content(''); // get page or posting written content ?>
			
			<?php endwhile; endif; // end the loop ?>
			<small>single.php</small>
				</article>
		</section>
		
<?php get_sidebar(); ?>
       
<?php get_footer(); ?>