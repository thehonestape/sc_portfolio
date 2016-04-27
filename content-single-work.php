<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="col-md-8">
			<?php if( have_rows('project_image') ): ?>
				<?php while( have_rows('project_image') ): the_row();
					// vars
					$image = get_sub_field('image');
					$caption = get_sub_field('caption');
				?>
				<img class="work" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="col-md-4">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

		<?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
