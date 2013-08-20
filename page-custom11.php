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
                    $post_id = 190;
                    $queried_post = get_post($post_id);
                    echo $queried_post->post_content; 
                    ?>
                    
            </div><!--end home-image-->
            
							<?php
                            query_posts('cat=11'); if(have_posts()) : while(have_posts()) : the_post(); ?>
                                <a class="home-event" href="<?php echo the_permalink();?>"> 
                                <?php the_post_thumbnail('thumb-175'); ?> 
                                </a>
                            <?php 
							endwhile; 
							endif; 
							wp_reset_query();
							?>
                             
            </div><!--end content-->
                        
            </center>
            
            </body>

<?php get_footer(); ?>