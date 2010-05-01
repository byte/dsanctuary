<?php get_header(); ?>

		<div class="left">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="left_articles">

				<div class="calendar"><p><strong><?php the_time('jS'); ?><br /><?php echo strtoupper(the_date('M','','',FALSE)) ?></strong></p></div>
				<h2 class="title"><a id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>""><?php the_title(); ?></a></h2>
				<p class="description">Posted by <?php the_author() ?> under <?php the_category(', ') ?><?php edit_post_link('Edit',' | ',''); ?></p>
				<?php the_content(''); ?>
                        <div class="spacer"></div>
			</div>
		<?php comments_template(); ?>
		<?php endwhile; ?>

		
		<?php else : ?>
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>
		<?php endif; ?>
		</div>	
		
		<div id="right">
			<div class="boxtop"></div>
			<div class="box">
					<h2>Post Meta</h2>
					<ul class="contentright">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li>
						<span class="datea">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/timeicon.gif" alt="" align="absmiddle" />
						</span> 
						<?php the_time('F j, Y') ?>
					</li>
					<li>
						<span class="datea">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/folder.gif" alt="" align="absmiddle" />
						</span>
						<?php the_category(', ') ?>
					</li>
					<li>
						<span class="datea">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/folder.gif" alt="" align="absmiddle" />
                                                </span>
						<?php the_tags(); ?>
					</li>
					<li>
						<span class="datea">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/comment.gif" alt="" align="absmiddle" />
						</span>
						<a href="#comments"><?php comments_number('No Comments', 'One Comments', '% Comments' );?></a>
					</li>
					<li>
						<span class="datea">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.gif" alt="" align="absmiddle" />
						</span>
						<?php comments_rss_link('Comments Feed'); ?>
					</li>
					
					
					<?php endwhile; endif; ?>
				  </ul>
			</div>
		</div>
<?php get_footer(); ?>
