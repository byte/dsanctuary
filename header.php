<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php if (wp_version()=='21') language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
	<div id="content">
		<div id="header">
			<p id="top_info"><?php wp_register(""," |"); ?> <?php wp_loginout(); ?></p>

			<div id="logo">
				<h1><a title="Home: <?php bloginfo('name'); ?> " href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?> <!--<span class="title">Grey</span>--></a></h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
		</div>
					
<div id="menu">

		<ul id="button">
		  <li class="page_item"><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
		  <?php $pages = wp_list_pages('sort_column=menu_order&depth=1&title_li=&echo=0');
		  print_r($pages);
		  ?>
		</ul>
</div>


		
		<div id="search">
			<form id="searchform" method="get" action="<?php echo get_settings('home'); ?>">
				<p><input type="text" class="search" name="s" id="s" value="<?php echo wp_specialchars($s, 1); ?>" /> <input type="submit" value="Search" class="button" /></p>
			</form>
		</div>

					
		<div class="gbox">
			<p><a href="#">Lorem ipsum dolor</a> sit amet, consectetuer adipiscing elit. Quisque sed felis. Aliquamit amet felis. Mauris eros semper, velit semper laoreet dictum, quam diam dictum urna, ec placerat elit nisl in quam.
                        Aliquam pharetra. Nulla in tellus eget odio sagittis blandit. Maec at nisl. ullam lorem mi, eleifend a, fringilla vel, semper at, ligula. Duis sed assa id mauris pretium venenatis.</p>
		</div>