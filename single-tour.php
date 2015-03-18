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
			the_post_thumbnail();
		}  ?>
	</div>
	<div class="column full">
		<p class="taligncenter"><a href="">BUY YOUR TICKETS ONLINE FOR THE <?php the_title(); ?> TOUR OR CALL ZERVE AT (800) 979-3370.</a></p>
		<div class="dark-gray-grad spacer">
			<h3>The stops on our <?php the_title(); ?> tour include at least 5 restauraunts, such as:</h3>
			<ul>
				<li><b>Peohe's</b> - Coronado's tropical island getaway with breathtaking views and Pacific Rim flavors. <a href="">www.peohes.com</a></li>
			</ul>
		</div>
	</div>
<?php endwhile; else: ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>