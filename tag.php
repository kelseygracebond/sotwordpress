<?php get_header(); ?>
            
			<div class="content-internal">
            
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="title-header">
                                
                                <a href="<?php echo the_permalink();?>"> 

									<h3 class="h2 margin-bottom"><?php the_title(); ?></h3>
                               
								</header> <!-- end article header -->

								<section class="clearfix">
                                    
									<div class="thumb"><?php the_post_thumbnail( 'thumb-175' ); ?></div><!--end floatleft-->

									<div class="main-tag"><?php the_content(); ?></div><!--end floatright-->
                                                                     
								</a>

								<p>View Similar <?php the_tags(); ?></p>

								</section> <!-- end article section -->

							</article> <!-- end article -->

							<?php endwhile; ?>

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

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the archive.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
