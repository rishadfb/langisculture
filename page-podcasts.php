<?php
/*
Template Name: Podcasts
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2">
			<?php /* Start loop */ ?>
			<?php query_posts('post_type=post&post_status=publish&posts_per_page=8&paged='. get_query_var('paged')); ?>	
			<?php while (have_posts()) : the_post(); ?>
			
			<li>
				<a href="<?php the_permalink() ?>"><h3 align="center"><?php the_title(); ?></h3>
				<br/><?php the_post_thumbnail(); ?></a>
			</li>

		
	<?php endwhile; // End the loop ?>
	</ul>
	<?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?>
</div>
</div>

<?php get_footer(); ?>
