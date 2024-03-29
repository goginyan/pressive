<?php
$options           = thrive_get_theme_options();
$sidebar_is_active = _thrive_is_active_sidebar( $options );
?>
<?php get_header(); ?>

	<div class="<?php echo _thrive_get_main_wrapper_class( $options ); ?>">

		<?php get_template_part( 'partials/breadcrumbs' ); ?>
		<?php if ( $options['blog_layout'] == "masonry_full_width" || $options['blog_layout'] == "masonry_sidebar" ): ?>
			<?php get_template_part( "partials/authorbox" ); ?>
		<?php endif; ?>

		<?php if ( $options['sidebar_alignement'] == "left" && $sidebar_is_active ): ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>
		<?php if ( _thrive_is_active_sidebar( $options ) ): ?>
		<div class="bSeCont"><?php endif; ?>

			<section class="<?php echo _thrive_get_main_section_class( $options ); ?>">
				<?php if ( $options['blog_layout'] != "masonry_full_width" && $options['blog_layout'] != "masonry_sidebar" ): ?>
					<?php get_template_part( "partials/authorbox" ); ?>
				<?php endif; ?>

				<?php if ( $options['blog_layout'] == "masonry_full_width" || $options['blog_layout'] == "masonry_sidebar" ): ?>
					<div class="mry-g"></div>
				<?php endif; ?>
				<?php if ( have_posts() ): ?>
					<?php
					$index             = 0;
					$excludePostsArray = array();
					while ( have_posts() ):
						?>
						<?php the_post(); ?>
						<?php _thrive_render_post_content_template( $options ); ?>

						<?php
						$excludePostsArray[] = get_the_ID();
						?>

						<?php if ( ( $options['blog_layout'] == "default" || $options['blog_layout'] == "full_width" ) && thrive_check_blog_focus_area( $index + 1 ) ):
						?>
						<?php thrive_render_top_focus_area( "between_posts", $index + 1 ); ?>
					<?php endif; ?>

						<?php
						$index ++;
					endwhile;
					?>
					<?php if ( _thrive_check_focus_area_for_pages( "archive", "bottom" ) ): ?>
						<?php if ( strpos( $options['blog_layout'], 'masonry' ) === false && strpos( $options['blog_layout'], 'grid' ) === false ): ?>
							<?php thrive_render_top_focus_area( "bottom", "archive" ); ?>
							<div class="spr"></div>
						<?php endif; ?>
					<?php endif; ?>


					<?php if ( $options['blog_layout'] != "masonry_full_width" && $options['blog_layout'] != "masonry_sidebar" ): ?>
						<div class="clear"></div>
						<div class="pgn clearfix">
							<?php thrive_pagination(); ?>
						</div>

						<div class="clear"></div>
					<?php endif; ?>

				<?php else: ?>
					<!--No contents-->
				<?php endif; ?>
			</section>

			<?php if ( _thrive_is_active_sidebar( $options ) ): ?></div><?php endif; ?>
		<?php if ( $options['sidebar_alignement'] == "right" && $sidebar_is_active ): ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>

		<?php if ( $options['blog_layout'] == "masonry_full_width" || $options['blog_layout'] == "masonry_sidebar" ): ?>
			<div class="clear"></div>
			<div class="pgn clearfix">
				<?php thrive_pagination(); ?>
			</div>

			<div class="clear"></div>
		<?php endif; ?>
	</div>
	<div class="clear"></div>

<?php get_footer(); ?>