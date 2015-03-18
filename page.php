<?php get_header(); ?>
<main>
	<div class="column half">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="column full content">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>
	<div class="column half talignright">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('full',array( 'class' => 'ft-img' ));
		}  ?>
	</div>
			<span style="display:none"><?php echo autoc_get_img('bgimg', 'bg'); ?></span>
<?php endwhile; else: ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>