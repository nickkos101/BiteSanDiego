<?php /* Template Name: Reviews Page */ ?>
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
		<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} 
		?>
	</div>
			<span style="display:none"><?php echo autoc_get_img('bgimg', 'bg'); ?></span>
<?php endwhile; else : ?>
<?php endif; ?>
<div class="column full taligncenter press">
	<?php query_posts(array('post_type' => 'reviews'));
	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	?>
	<div class="column full spacer talignleft">
		<?php the_content(); ?>
		<p class="talignright"><?php the_title(); ?></p>			
	</div>
<?php endwhile; else : ?>
<?php endif; ?>                 
</div>
</main>
<?php get_footer(); ?>