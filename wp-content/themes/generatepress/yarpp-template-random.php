<?php
/*
YARPP Template: Random
Description: This template gives you a random other post in case there are no related posts
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?><h3>Другие статьи</h3><?php if (have_posts()):
	$postsArray = array();
	while (have_posts()) : the_post();
		$postsArray[] = '<a href="'.get_permalink().'" rel="bookmark">'.get_the_title().'</a><!-- ('.get_the_score().')-->';
	endwhile;

echo implode('<br/> '."\n",$postsArray); // print out a list of the related items, separated by commas
?><?php else:
query_posts("orderby=rand&order=asc&limit=1");
the_post();?>
<p><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></p>
<?php endif; ?>