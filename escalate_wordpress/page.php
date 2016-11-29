<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="post">
			<h2 class="title"><?php the_title(); ?></h2>		
				<?php the_content('Read More'); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php get_footer(); ?>