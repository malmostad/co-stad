<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" type="image/x-icon" href="//assets.malmo.se/external/v4/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<link href="//assets.malmo.se/external/v4/malmo.css" media="all" rel="stylesheet" type="text/css">
		
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">
			
			<header id="malmo-masthead" role="banner" class="mf-v4"> <div class="nav-logo"> <a href="http://malmo.se/"></a> </div> <div class="dropdown" id="main-nav"> <button type="button" data-toggle="dropdown" class="m-icon-menu-0"> <span class="text">Meny</span> </button> <ul class="dropdown-menu" role="menu" aria-hidden="true" aria-labelledby="nav-trigger" style="max-height: 795px;"> <li> <a role="menuitem" href="http://malmo.se/bobyggamiljo">Bo, bygga &amp; miljö</a> </li> <li> <a role="menuitem" href="http://malmo.se/foretagandejobb">Företagande &amp; jobb</a> </li> <li> <a role="menuitem" href="http://malmo.se/forskolautbildning">Förskola &amp; utbildning</a> </li> <li> <a role="menuitem" href="http://malmo.se/kommunpolitik">Kommun &amp; politik</a> </li> <li> <a role="menuitem" href="http://malmo.se/kulturfritid">Kultur &amp; fritid</a> </li> <li> <a role="menuitem" href="http://malmo.se/omsorgvardstod">Omsorg, vård &amp; stöd</a> </li> <li> <a role="menuitem" href="http://malmo.se/socialfamiljefragor">Social- &amp; familjefrågor</a> </li> <li> <a role="menuitem" href="http://malmo.se/stadsplanering">Stadsplanering &amp; trafik</a> </li> <li> <a role="menuitem" href="http://malmo.se/blankettertjanster">Tjänster &amp; blanketter</a> </li> </ul> </div> <button type="button" class="m-icon-search-0" title="Sök på malmo.se" id="search-trigger"></button> <div id="masthead-search" class="mf-v4"> <form action="http://s1.malmo.se" method="get"> <div class="input-group input-group-sm"> <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input name="q" class="q form-control ui-autocomplete-input" placeholder="Sök på malmo.se" type="text" autocapitalize="off" autocorrect="off" data-autocomplete-url="http://s1.malmo.se/search/autocomplete" data-images-url="http://s1.malmo.se" data-caller="Masthead" autocomplete="off"> <span class="input-group-btn"> <input name="utf8" type="hidden" value="✓"> <input class="btn btn-default" name="" type="submit" value="Sök"> </span> </div> </form> </div> </header>
			<link rel="stylesheet" href="//assets.malmo.se/external/v4/icons.data.svg.css">
			<script src="//assets.malmo.se/external/v4/malmo.js"></script>