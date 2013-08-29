<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>		
    
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<center>
            
            <header class="header" role="banner">
            
            	<div id="mid_logo">
                	<a class="logo2" href="http://localhost/standouttalent"><img class="condensed_logo" src="<?php echo get_template_directory_uri();?>/images/logo_small_grey.png"/></a>
                	</div>
                	<a class="logo_short" href="http://localhost/standouttalent"><img class="logo_short2" src="<?php echo get_template_directory_uri();?>/images/logo.png" style="height:100px;"/></a>

            	
                    <ul><?php if ( is_single() || is_home() ) ?><a href="<?php echo bloginfo('url'); ?>">events</a>
                    
                    <a href="http://localhost/standouttalent/category/about">about</a>
                    
                    <a href="http://localhost/standouttalent/category/support">support</a>
                    
					<a class="logo1" href="http://localhost/standouttalent"><img class="full_logo" src="<?php echo get_template_directory_uri();?>/images/logo.png" style="height:100px;"/></a>

                    <a href="http://localhost/standouttalent/category/venue">venue</a>
                    
                    <a href="http://localhost/standouttalent/blog">blog</a>
                    
                    <a href="http://localhost/standouttalent/category/performing">performing</a></ul>

                   </div><!--end inner-header-->
                        
        </div><!--end container-->
</center>