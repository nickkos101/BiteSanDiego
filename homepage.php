<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php $optionname= 'main_theme_options'; $mainoptions = get_option($optionname); ?>
<main>
	<div class="column half">
		<div class="column full">
			<h1 class="cascade">
				We <i>love</i> food </br>
				<span>We <i>love</i> San Diego. </br></span>
				<span><span>We <i>love</i> you, fellow foodie.</span></span>
			</h1>
		</div>
		<div class="column full">
			<p><?php echo $mainoptions['btmcontentxt']; ?></p>
			<p class="boast"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/tripadvisor.png"><strong>Top 10</strong> San Diego Tour on Trip Advisor</p>
			<p class="boast"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/yelp.png"><strong>500+</strong> Reviews on Yelp</p>
		</div>
	</div>
	<div class="column half talignright">
		<img src="<?php echo get_template_directory_uri(); ?>/images/1.png">
	</div>
	<div class="column full links">
		<div class="column third spacer talignleft">
			<img src="<?php echo get_template_directory_uri(); ?>/images/voucher.png" class="alignright">
			<a href="http://bite.inspyregroup.com/voucher/"><h3>Got a Voucher? <strong>Lucky You</strong></h3></a>
		</div>
		<div class="column third spacer talignleft">
			<a target="_blank" href="http://abcnews.go.com/Travel/skip-san-diego/story?id=20305457&singlePage=true"><h3 class="gma-text"><strong>Check Us Out</strong>
				<img src="<?php echo get_template_directory_uri(); ?>/images/gma.png" class="alignleft gma">on good<br/> morning america</h3>
		</div>
		<div class="column third spacer talignright">
				<img src="<?php echo get_template_directory_uri(); ?>/images/chips.png" class="alignleft">
				<a href="http://www.noshlasvegas.com/"><h3>Going to <strong>Vegas?</strong><br/>We Do Tours there!</h3></a>
		</div>
	</div>
	</main>
	<?php get_footer(); ?>