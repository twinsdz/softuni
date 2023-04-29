<?php get_header() ?>

<h1> <?php the_archive_title(); ?> </h1>


<div> class="author-bio" <?php echo the_author_meta( 'user_description' ); ?> </div>


<?php if (have_posts()) : ?>
	<ul class="jobs-listing">

		<?php while (have_posts()) : ?>
			<?php the_post(); ?>

			<?php get_template_part( 'partials/content', 'author' ) ?>

		<?php endwhile; ?>
	</ul>

<?php else: ?>

	<?php _e( 'No posts', 'softuni' ) ?>

<?php endif; ?>

<?php get_footer() ?>