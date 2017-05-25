<?php get_header(); ?>
        
		<!-- Recipe Area -->
        <section class="recipe">
			
			<!-- THE LOOP -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
			<article class="post-excerpt">
			<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
			<small>Posted on <?php the_time('F j, Y'); //gets the time ?> by <?php the_author(); //shows author ?> in <?php the_category(', '); //shows the category ?> </small>
			<br />
			<br />
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
			<?php the_excerpt(); // get the posting's excerpt ?>
				<p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
			</article>
			<?php endwhile; endif; // end the loop ?>
			<small>index.php</small>
		</section>
		
<?php get_sidebar(); ?>
       
<?php get_footer(); ?>