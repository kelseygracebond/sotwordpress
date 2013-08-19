<?php
/*
Template Name: Events Page
*/
?>

<body>

<?php get_header(); ?>

			<center>
            
			<div id="content">

							<?php global $more ; $more = 0;
							
                            query_posts('cat=11'); if(have_posts()) : while(have_posts()) : the_post(); ?>
                            
                            
                          	<a href="<?php echo the_permalink(the_post_thumbnail);?>"> 
                            
							<?php if ( the_post_thumbnail('thumb-175')):?> </a>
                            
                            <?php endif; ?>
                                                     
                            <?php endwhile; endif; wp_reset_query();?>
                             
            </div><!--end content-->
                        
            </center>
            
            </body>

<?php get_footer(); ?>