<?php
/*
Template Name: Events Page
*/
?>

<body>

<?php get_header(); ?>

			<center>

			<div id="content">
                        												
							<?php if (have_posts() ) while (have_posts() ) : the_post(); ?>
                            
                            <h1><?php the_field('page_heading'); ?> </h1>

                            <h3><?php the_field('page_description'); ?> </h3>
                            
                            <img src="<?php the_field('page_image'); ?>" alt="" />
                            
                            <?php the_field('page_content'); ?>
                            
                            <?php endwhile;?>
                            
								<?php
                                global $more;
                                $more = 0;
                                query_posts('cat=11');
                                if(have_posts()) :
                                while(have_posts()) :the_post();
                                ?>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                                <div><?php the_content('Read More') ?></div>
                                <?php
                                endwhile;
                                endif;
                                wp_reset_query();?>
                                                            
            </div> <!-- end #content -->
            
            </center>
            
            </body>

<?php get_footer(); ?>