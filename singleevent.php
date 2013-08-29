<?php get_header(); ?>

			<div class="content-internal">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="title-header">

									<h3 class="h2"><?php the_title(); ?></h3>

								</header> <!-- end article header -->

								<section class="clearfix main">

									<?php the_content(); ?>
								</section> <!-- end article section -->

								<div class="eventinfo">
                                
                                    
									<p1>Dates & Times</p1><p><?php the_field('date_&_times'); ?></p>
                                    
                                    <p1>Price</p1><p><?php the_field('price'); ?></p>
                                    
									<p1>Rating</p1><p><?php the_field('rating'); ?></p> 
                                    
                                    
                                    <?php echo'<a href="http://www.brownpapertickets.com/browse.html?formsubmitted=1&reset=1&secretkeywords=&keywords=Tower+Theater+Roseville" target="_blank" />';?><img src="<?php echo get_template_directory_uri();?>/images/ticket_normal.png" style="height:50px; width:auto;"
                                onmouseover="this.src='<?php echo get_template_directory_uri();?>/images/ticket_hover.png'"
								onmouseout="this.src='<?php echo get_template_directory_uri();?>/images/ticket_normal.png'" /></a><br>
                                
                                                                                               
								</div><!--end eventinfo-->
                                
                                    <p><?php the_field('auditions'); ?></p>
                                    
									<p><?php the_field('reviews'); ?></p>                                   

                                    <p>View Similar <?php the_tags(); ?></p>


							</article> <!-- end article -->

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
									</footer>
							</article>

						<?php endif; ?>

			</div> <!-- end #content -->
            
<?php get_footer(); ?>
