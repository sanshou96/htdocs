<?php
get_header();

$timelineblog_activate_setting = get_theme_mod('timelineblog_activate_setting', 'inactive');
if ( $timelineblog_activate_setting == "active" && !is_page()) { ?>
	<!-- Breadcrumb Start-->
	<?php get_template_part('breadcrumb'); ?>
	<!-- /Breadcrumb End -->

	<!-- TimelineBlog index.php -->
	<section class="module p-top-70 blog-timeline" id="content">
		<div class="container">
			<div class="blog-timeline-header">
				<?php 
				$timelineblog_post_heading = get_theme_mod('timelineblog_post_heading', 'Blog & News Timeline View');
				if($timelineblog_post_heading != "" ){ ?>
					<h2 class="blog-timeline-header-title"><?php echo esc_html($timelineblog_post_heading); ?></h2>
				<?php } ?>
			</div>
			<ul class="timeline">
				<?php
				if(have_posts()) :
					while (have_posts()) : the_post();
					
					//feature img url
					$timelineblog_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );  
					
					// post date
					$timelineblog_day = esc_html( get_the_date( 'd' ) );				
					$timelineblog_day_month = esc_html( get_the_date('F, Y') );
						
						
					//Left and Right Posts loop code ( $wp_query->current_post % 2 ) ?>
					<li <?php if( $wp_query->current_post % 2 ){ ?> class="timeline-inverted" <?php } ?>>
						
						<!-- post Format Code Start -->
							<div class="timeline-badge"><span class="dashicons dashicons-admin-post post-format-standard-icon"></span></div> 
						<!-- post Format Code End-->
						
						<div class="entry-date-badge <?php if( $wp_query->current_post % 2 ){ ?> caret-right <?php } else { ?> caret-left <?php } ?>">
							<a href="<?php echo esc_url(get_day_link( get_the_time('Y'), get_the_time('m'), get_the_time('d') )); ?>" class="entry-date">
								<big><?php echo esc_html($timelineblog_day); ?></big><?php echo esc_html($timelineblog_day_month); ?>
							</a>
						</div>
						<div class="timeline-panel post">							
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>"><?php if($timelineblog_url != NULL) { the_post_thumbnail(); } ?></a>
							</div>
						
							<div class="post-content-area">
								<div class="post-header font-alt">
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<div class="post-meta">
										<span><i class="fa fa-user"></i> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a></span>
										<span><i class="fa fa-folder-open-o"></i> 
											<?php
												$timelineblog_categories = get_the_category();
												if ( ! empty( $timelineblog_categories ) ) {
													echo '<a href="'. esc_url( get_category_link($timelineblog_categories[0]->term_id)).'">'. esc_html($timelineblog_categories[0]->name).'</a>';
												}
											?>
										</span>
										<?php //if( have_comments() ) { ?>
										<span><i class="fa fa-comments-o"></i> 
											<a href="<?php comments_link(); ?>">
												<?php comments_number ( __('No Comments', 'timelineblog'), __( '1 Comment', 'timelineblog'), __('% Comments', 'timelineblog') ); ?> 
											</a>
										</span>
										<?php //} ?>
									</div>
								</div>
								<div class="post-more">
									<?php
										// added excerpt for front-page if setting is active
										$cryptocurrency_exchange_readmore_general = get_theme_mod('cryptocurrency_exchange_readmore_general', 'inactive');
										if($cryptocurrency_exchange_readmore_general == 'active' && !is_page()){ ?>
											<?php the_excerpt(); ?>
											<p class="post-button">
												<a class="more-link" href="<?php the_permalink()?>"><?php esc_html_e('Read More','timelineblog'); ?></a>
											</p>
										<?php  } else { 
											the_content(__('Read More','timelineblog')); 
										} ?>
								</div>
							</div>
						</div>
					</li>
					<?php
						endwhile;
						// Reset Post Data
						wp_reset_postdata();
						endif;
					?>	
			</ul>
			
			<!-- pagination -->
			<div class="pagination font-alt">
				<?php
					// custom query loop pagination
					global $wp_query;
					$timelineblog_big = 999999999; // need an unlikely integer

					the_posts_pagination( array(
						'base'      => str_replace( $timelineblog_big, '%#%', get_pagenum_link( $timelineblog_big ) ),
						'format'    => '?paged=%#%',
						'current'   => max( 1, get_query_var('paged') ),
						'total'     => $wp_query->max_num_pages,
						'prev_text' => __('&#x276E;', 'timelineblog'),
						'next_text' => __('&#x276F;', 'timelineblog'),
						//'type'      => 'array'
					));
				?>
			</div>
		</div>
	</section>
	<!-- /End of Blog Timeline Section-->
	<?php 
} else { ?>
<!-- cryptocurrency parent index.php code -->
	<section id="content" class="module-small">
		<div class="container" >
			<div class="row" id="content">
				<?php if ( is_active_sidebar( 'sidebar-widget' ) ) { ?>
					<div class="col-md-8 col-sm-6 col-xs-12">
					<?php } else { ?>
					<div class="col-md-12 col-sm-6 col-xs-12">
						<?php } ?>
					<div class="post-columns site-info">
						<?php
							if(have_posts()) :
								while (have_posts()) : the_post();
								
								//feature img url
								$cryptocurrency_exchange_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>		
								<div class="timeline-panel post">	
									<div class="post-thumbnail">
										<a href="<?php the_permalink(); ?>"><?php if($cryptocurrency_exchange_url != NULL) { the_post_thumbnail(); } ?></a>	
									</div>	
									<div class="post-meta-area">	
										<span class="cat-links">
										<?php if (has_category()) : ?>	
											<?php the_category('&nbsp;,&nbsp');?>
										<?php endif; ?>
										</span>	
									</div>
									
									<div class="post-content-area">
										<div class="post-header font-alt">
											<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<div class="post-meta">
												<span><i class="fa fa-user"></i> <?php esc_html_e('By', 'timelineblog') ?> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a> </span>
												<span><i class="fa fa-calendar"></i>  <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a> </span>										
												<?php
												if( get_the_tags() ){
													echo '<span><i class="fa fa-tag"></i> <a href="#">';
													ucwords( the_tags( '',', ','' ) );
													echo '</a> </span>';
												} ?>
											</div>
										</div>
										<div class="post-more">
											<?php 
											//$cryptocurrency_exchange_readmore_general 
											$cryptocurrency_exchange_readmore_general = get_theme_mod('cryptocurrency_exchange_readmore_general', 'inactive');
											if($cryptocurrency_exchange_readmore_general == "active" && !is_page() ){ ?>
												<?php the_excerpt(); ?>
												<p class="post-button">
													<a class="more-link" href="<?php the_permalink()?>"><?php esc_html_e('Read More','timelineblog'); ?></a>
												</p>
											<?php } else { 
												the_content(__('Read More','timelineblog')); 
											} ?>
										</div>
									</div>
								</div>
							<?php
								endwhile;
								// Reset Post Data
								wp_reset_postdata();
								endif;
							?>
							<div style="text-align: center;" class="col-lg-12 col-md-12 col-sm-12 pagination font-alt">
								<?php
									// query pagination
									global $wp_query;
									$cryptocurrency_exchange_big = 999999999; // need an unlikely integer
									
									the_posts_pagination( array(
										'base'      => str_replace( $cryptocurrency_exchange_big, '%#%', get_pagenum_link( $cryptocurrency_exchange_big ) ),
										'format'    => '?paged=%#%',
										'current'   => max( 1, get_query_var('paged') ),
										'total'     => $wp_query->max_num_pages,
										'prev_text' => __('&#x276E;', 'timelineblog'),
										'next_text' => __('&#x276F;', 'timelineblog'),
									));
								?>
							</div>
					</div>
				</div>
				<?php if ( is_active_sidebar( 'sidebar-widget' ) ) { ?>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="sidebar"><!--Sidebar Widget-->
						<?php dynamic_sidebar('sidebar-widget') ?>
					</div><!--Sidebar Widget End-->
				</div>
				<?php } ?>
			</div><!--/.row-->
		</div><!--/.container-->
	</section>
<?php } ?>
<?php get_footer(); ?>