<!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" value="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<?php wp_head() ?>
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    </head>
    <body>
	<br>
	<div class="container">
	    <div class="cleafix">
		<?php wp_nav_menu(array(
		    'menu' => 'primary',
		    'theme_location' => 'primary',
		    'container' => false,
		    'menu_class' => 'nav nav-pills float-sm-right',
		    'walker' => new BootstrapNavWalker()
		)) ?>
		<a href="http://fluechtlingshilfe-babelsberg.de" target="_blank" class="mr-3 float-xs-right">
		    <img src="<?= get_stylesheet_directory_uri().'/images/fhb-logo.jpg' ?>" height="40">
		</a>
		<a style="color: inherit" href="<?php bloginfo('url') ?>">
		    <h1 class="title"><span style="color: #095e66">Potsdam</span> <span style="color: #0e8a97">Tandems</span></h1>
		</a>
	    </div>
	</div>
