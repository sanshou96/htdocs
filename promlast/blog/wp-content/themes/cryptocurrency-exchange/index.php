<?php get_header(); ?>

<section id="content" class="module-small">
    <div class="container" >
		<div class="row" id="content">
			<?php if ( is_active_sidebar( 'sidebar-widget' ) ) { ?>
				<div class="col-md-8 col-sm-6 col-xs-12">
				<?php } else { ?>
				<div class="col-md-12 col-sm-6 col-xs-12">
					<?php } ?>
				<div class="post-columns site-info">
				
						
						<div style="text-align: center;" class="col-lg-12 col-md-12 col-sm-12 pagination font-alt">
						
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
<?php get_footer(); ?>