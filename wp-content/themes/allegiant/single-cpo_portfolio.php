<?php get_header(); ?>

<?php get_template_part('template-parts/element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		
		<section id="content" class="content portfolio-page-content">
			<?php do_action('cpotheme_before_content'); ?>
			<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="page-content">
					<br>
					<div class="portfolio-return-link">
						<a href="<?php blogInfo('url')?>/portfolio "> Portfolio</a>
					</div>
					<div class="portfolio-page-title">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="page-content-left">
						<div class="portfolio-page-image">
							<a href="<?php the_field('site_url') ?>" target="_blank">
								<img src="<?php the_field('project_large_image'); ?>" />
							</a>
						</div>
					</div>
					<div class="page-content-right">						
						<h3 class="portfolio-page-subtitle"><?php the_field('sub_title'); ?></h3>
						<hr class="subtitle-divider">
						<p class="portfolio-page-description"><?php the_field('project_description'); ?></p>	
						<p class="portfolio-page-additional-info"><strong><?php the_field('additional_info'); ?></strong></p>
						<br>
						<div class="so-widget-sow-button so-widget-sow-button-wire-08c04178721d">
							<div class="ow-button-base">
								<a href="<?php the_field('site_url') ?>" target="_blank">
									<span>Visit Website</span>
								</a>
							</div>
						</div>					
					</div>
					
					<?php the_content(); ?>

				</div>
				
				<div class="clear"></div>
			</div>
			
			<?php endwhile; ?>
			
			
		</section>
		
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>