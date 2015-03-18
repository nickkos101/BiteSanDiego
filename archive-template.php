<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<main>
	<div class="column two-thirds">
		<?php query_posts(array('posts_per_page' => 25)); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="column full content post">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php the_excerpt(); ?>
			<div class="talignright">
				<a href="<?php the_permalink(); ?>"><div class="btn">Read More</div></a>
			</div>
		</div>
		<span style="display:none"><?php echo autoc_get_img('bgimg', 'bg'); ?></span>
	<?php endwhile; else: ?>
<?php endif; ?>
</div>
<div class="column third talignright sidebar">
	<?php dynamic_sidebar('sidebar-1'); ?>
</div>
</main>
<?php get_footer(); ?>