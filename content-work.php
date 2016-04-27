<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>

<article class="col-md-4" id="post-<?php the_ID(); ?>">
	<div class="entry-content">
		<?php if( have_rows('project_image') ): ?>
			<?php while( have_rows('project_image') ): the_row();
				// vars
				$image = get_sub_field('image');
				$caption = get_sub_field('caption');
			?>
			<a href="<?php the_permalink(); ?>">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				 <?php break; ?>
			</a>
	<?php endwhile; ?>
<?php endif; ?>
		<!-- <div class="entry-content-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div> -->
		<?php /* the_content(); */ ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
