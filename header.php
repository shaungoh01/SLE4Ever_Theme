<!DOCTYPE>
<html <?php language_attributes(); ?>> 
	<head>
		<meta name="theme-color" content="#2a323a">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css" type="text/css">

	    <!-- Plugin CSS -->
    	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css" type="text/css">

	    <!-- Bootstrap Core JavaScript -->
	    
	    <script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>

	    <!-- Plugin JavaScript -->
	    <script src="<?php echo get_template_directory_uri()?>/js/jquery.easing.min.js"></script>
	    <script src="<?php echo get_template_directory_uri()?>/js/jquery.fittext.js"></script>
	    <script src="<?php echo get_template_directory_uri()?>/js/wow.min.js"></script>

	    <!-- Custom Theme JavaScript -->
	    <script src="<?php echo get_template_directory_uri()?>/js/creative.js"></script>

    	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	</head>
<body <?php body_class(); ?>>
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?php bloginfo('name'); ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
				$args=array(
					'theme_location' => 'primary',
					'echo' => false,
					'container' => false
					);
				 $menu = wp_nav_menu($args);
				echo preg_replace( array( '#^<div[^>]*>#', '#</div>$#','#^<ul[^>]*>#', '#</ul>$#' ), '', $menu ); ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>