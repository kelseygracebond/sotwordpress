<?php get_header(); ?>

			<div class="content-internal">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="title-header">

									<h3 class="h2"><?php the_title(); ?></h3>
                                    
                                    <p2>Written By: <?php the_author(); ?>
                                    
                                    <br>On: <?php the_time('F jS, Y') ?></p2>
                                    
								</header> <!-- end article header -->

								<section class="clearfix margin-top">

									<?php the_content(); ?>
                                    
                                    <p>View Similar <p5><?php the_tags(); ?></p5></p>
            						
								</section> <!-- end article section -->
                                
                                <section><?php comments_template(); ?></section>
                                                                                                
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
