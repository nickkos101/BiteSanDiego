<?php get_header(); ?>
<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="column half">
		<div class="column full content">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>
	<div class="column half talignright">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('full',array( 'class' => 'ft-img' ));
		}  ?>
		<div class="gallery">
			<?php autoc_get_gallery('gallery')?>
		</div>
	</div>
	<div class="column full">
		<!--<p class="taligncenter"><a href="">BUY YOUR TICKETS ONLINE FOR THE <?php the_title(); ?> TOUR OR CALL ZERVE AT (800) 979-3370.</a></p>-->
		<div class="dark-gray-grad spacer resturaunts">
			<!--<h3>The stops on our <?php the_title(); ?> tour include at least 5 restauraunts, such as:</h3>-->
			<?php echo autoc_get_postdata('rr'); ?>
		</div>
	</div>
	<span style="display:none"><?php echo autoc_get_img('bgimg', 'bg'); ?></span>
<?php endwhile; else: ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>