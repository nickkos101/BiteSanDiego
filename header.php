<!DOCTYPE html>
<html>
<head profile="http://www.w3.org/2005/10/profile">
	<title><?php wp_title( '' ); ?></title>
	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27658543-1', 'auto');
  ga('send', 'pageview');

</script>
	<?php wp_head(); ?>
</head>
<body class="col-wrap">
	<div class="container box">
		<div class="gradient">
			<div class="box-spacer">
				<header>
					<div class="column fifth">
						<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
					</div>
					<div class="column four-fifths">
						<nav>
							<?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
						</nav>
						<div class="tickets talignright">
							<a href="https://www.zerve.com/BiteSanDiego"><img class="alignright" src="<?php echo get_template_directory_uri(); ?>/images/tickets.png">
								<h2>
									Advanced Tickets Totally Required </br>
									<span>Get Em Here</span>
								</h2>
							</a>
						</div>
					</div>
				</header>
				<header class="resp-menu blue-grad">
					<div class="column third">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png">
					</div>
					<div class="column two-thirds">
						<i class="fa fa-bars"></i>
					</div>
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
					</nav>
				</header>