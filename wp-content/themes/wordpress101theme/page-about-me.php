<?php get_header(); ?>

<div class="row">

	<div class="col-xs-12 col-sm-8">

	<?php if( have_posts(  ) ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<!-- Display Content of Post -->
			<p><?php the_content(); ?></p>

			<h3><?php the_title(); ?></h3>

			<hr>

		<?php endwhile; ?>

	<?php endif; ?>

	</div>

	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>