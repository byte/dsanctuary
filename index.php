<?php get_header(); ?>

		<div class="left">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="left_articles">
				<div class="buttons"><a href="<?php comments_link('', FALSE); ?>" class="redbtn" title="<?php comments_number('0 comments','1 comment','% comments'); ?>"><?php comments_number('0 Comments','1 Comment','% Comments'); ?></a> </div>
				<div class="calendar"><p><strong><?php the_time('jS'); ?><br /><?php echo strtoupper(the_date('M','','',FALSE)) ?></strong></p></div>
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<p class="description">Posted by <?php the_author() ?> under <?php the_category(', ') ?><?php edit_post_link('Edit',' | ',''); ?></p>
				<?php the_content(''); ?>
			<div class="spacer"></div>
			</div>
		<?php endwhile; ?>

		
		<?php else : ?>
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		<?php endif; ?>
			<div>
				<div class="alignleft"><?php next_posts_link('&laquo; Previous Posts') ?></div>
				<div class="alignright"><?php previous_posts_link('Next Posts &raquo;') ?></div>
			</div>
		</div>	
		
<?php get_sidebar(); ?>
<?php get_footer(); ?>