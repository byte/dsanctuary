		<div id="right">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<div class="boxtop"></div>
			<div class="box">
					<h2>Recent Posts:</h2>
					<ul class="contentright">
					<?php $my_query = new WP_Query('showposts=10');	?>
					<?php while ($my_query->have_posts()) : $my_query->the_post(); $shorttitle = substr(the_title('','',FALSE),0,25); ?>
					<li><a title="<?php echo the_title() ?>" href="<?php the_permalink() ?>">
					<span class="datea">
					  <?php the_time('d M') ?>
					</span> 
					  <?php echo $shorttitle; if (strlen($shorttitle) >24){ echo '...'; } ?>
					</a></li>


					<?php endwhile; ?>
				  </ul>

				<h2>Categories:</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				</ul>

				<h2>Archives:</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>

				<h2>Partners:</h2>
				<ul>
				<?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>
				</ul> 
			</div>
			<?php endif; ?>
		</div>