<?php
/*
Template Name: Blog Page
*/
?>

<body>

<?php get_header(); ?>

				<div class="content-internal">
                
        <?php
		
        query_posts('cat=3'); 
		
		if(have_posts()) : while(have_posts()) : the_post(); ?>
                   
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article"> 								
                            
								<header class="title-header">

									<h3 class="h2"><?php the_title(); ?></h3>

								</header> <!-- end article header -->

								<section class="clearfix clear">

									<?php the_post_thumbnail( 'bones-thumb-300' ); ?>

									<?php the_content(); ?>
 
                                    <h7>Written By:</h7> <h8><?php the_author(); ?></h8>
                                    
                                    <br><h7>On:</h7> <h8><?php the_time('F jS, Y') ?></h8>
                                    
                                    <?php get_comments_template(); ?>
                                                                        								
                                </section> <!-- end article section -->

							</article> <!-- end article -->

							<?php 
							endwhile;
							endif;
							wp_reset_query();
							 ?>
                            
									<?php if (function_exists('bones_page_navi')) { ?>
										<?php bones_page_navi(); ?>
									<?php } else { ?>
										<nav class="wp-prev-next">
											<ul class="clearfix">
												<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
												<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
											</ul>
										</nav>
									<?php } ?>



			</div> <!-- end #content -->

            </center>
            
            </body>

<?php get_footer(); ?>