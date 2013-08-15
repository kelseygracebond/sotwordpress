<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>		
    
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
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
                    
                    <ul><?php if ( is_single() || is_home() ) { echo 'class="current_page_item"'; } ?><a href="<?php echo bloginfo('url'); ?>">events</a>
                    
                    <a href="http://localhost/standouttalent/category/about">about</a>
                    
                    <a href="index.php"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" style="height:120px;"/></a>

                    <a href="http://localhost/standouttalent/category/support">support</a>
                    
                    <a href="http://localhost/standouttalent/category/blog">blog</a></ul>
                   
                    
                     <div class="icons"><a href="https://www.facebook.com/StandOutTalent.Org" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/fb.png" style="height:20px;"/></a>
                     
    				 <a href="https://twitter.com/StandOutTalent" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/tw.png" style="height:20px;"/></a></div><!--end icons-->
                        
				</div> <!-- end #inner-header -->
            
            </center>