<?php
/*
Template Name: Events Page
*/
?>

<body>

<?php get_header(); ?>

	<center>
            
		<div id="content">
            
                <div class="home-image">
            
						<?php
                        query_posts('cat=16'); if(have_posts()) : while(have_posts()) : the_post(); ?>
                      
                            <div class="event">
                                                    
                                <a href="<?php echo the_permalink();?>">                                
								<?php the_post_thumbnail('upcoming'); ?>  
                                <div class="hover-text"><?php the_title();?>:                                <?php the_field('date_&_times'); ?>
                              
                                <?php echo'<a href="http://www.brownpapertickets.com/browse.html?formsubmitted=1&reset=1&secretkeywords=&keywords=Tower+Theater+Roseville" target="_blank">';?>
                                <img src="<?php echo get_template_directory_uri();?>/images/ticket_normal.png" style="height:50px; width:auto;"
                        		onmouseover="this.src='<?php echo get_template_directory_uri();?>/images/ticket_hover.png'"
								onmouseout="this.src='<?php echo get_template_directory_uri();?>/images/ticket_normal.png'"
                                onClick="this.src='<?php echo get_template_directory_uri();?>/images/ticket_pressed.png'"
                                /></a>
</div>  <!--end hover-text--></a>
                                
                                            
                            </div><!--end event-->
                                                            
                        <?php 
                        endwhile; 
                        endif; 
                        wp_reset_query(); ?> 

            	</div><!--end home-image-->
                
			
            	<div class="events">           

						<?php
                        query_posts('cat=11'); if(have_posts()) : while(have_posts()) : the_post(); ?>
                            
                            <div class="event">
                                                    
                                <a href="<?php echo the_permalink();?>">
                                    <?php the_post_thumbnail('thumb-175'); ?>
                                    <div class="hover-text"><?php the_title();?>:                                    <?php the_field('date_&_times'); ?>
</div><!--end hover-text-->
                                </a>
                            
                            </div><!--end event-->
                                                            
						<?php 
                        endwhile; 
                        endif; 
                        wp_reset_query(); ?> 
                        
				</div><!--end events-->

		</div><!--end content-->

	</center>
            
</body>

<?php get_footer(); ?>