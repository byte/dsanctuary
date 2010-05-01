<?php get_header(); ?>

		<div class="left_page">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="left_articles_page">

				<h2><a id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>""><?php the_title(); ?></a></h2>

				<div style="clear:both"></div>
				<?php the_content(''); ?>
				<?php edit_post_link('Edit this page','',''); ?>
				<?php comments_template(); ?>
			</div>
		<?php endwhile; ?>

		
		<?php else : ?>
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		<?php endif; ?>
		</div>	
		

<?php get_footer(); ?>