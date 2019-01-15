<?php

get_header();
?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div class="entry-content">
            <?php while ( have_posts() ) : the_post(); ?>

    			<?php echo the_content(); ?>

    		<?php endwhile; // end of the loop. ?>
		</div>
	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>
