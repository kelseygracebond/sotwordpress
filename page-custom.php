<?php
/*
Template Name: Events Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">
                        
                        <?php // The Query

						$query = new WP_Query( $args );

						// The Loop
						
						if ( $query->have_posts() ) {
							
							while ( $query->have_posts() ) {
								
								$query->the_post();
								
								echo '<li>' . get_the_title() . '</li>';
							}
						} else {
							// no posts found
						}
						/* Restore original Post Data */
						
						wp_reset_postdata(); ?>
												
							<?php if (have_posts() ) while (have_posts() ) : the_post(); ?>
                            
                            <h1><?php the_field('page_heading'); ?> </h1>

                            <h3><?php the_field('page_description'); ?> </h3>
                            
                            <img src="<?php the_field('page_image'); ?>" alt="" />
                            
                            <?php the_field('page_content'); ?>
                            
                            <?php endwhile;?>
                            
                </div> <!-- end #inner-content -->

            </div> <!-- end #content -->

<?php get_footer(); ?>