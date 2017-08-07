<?php

/**
 * Inner Page Template
 *
   Template Name:  Inner Page
 *
 * @file           frontpage.php
 * @package        Balanced Chiropractic
 * @author         Bozeman Interactive 
 * @copyright      2016 Bozeman Interactive
 */

get_header(); ?>
<div id="featured">
	<div class="container">
    	<div class="text">
            <h2><?php the_title(); ?></h2>
            <a href="http://balancedchirohelena.appointy.com/" target="_blank">
            <div class="readmore outerglow">
            <span class="readmoretext">Schedule Online Now</span>
            <span class="go">>></span>
            <div class="clear"></div>
            </div>
            </a>
        </div>
    </div>
	<?php
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		  the_post_thumbnail();
		} 
	?>
    
</div>
<div id="content">
	<div class="container padding">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<h1><?php the_title();?></h1>
            	<?php the_content(); ?>
            	<?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
        <?php endwhile; endif; ?>
        <a href="http://www.balancedchirohelena.com/contact/" target="_blank">
			<div class="readmore outerglow">
				<span class="readmoretext">Contact Us Now</span>
				<span class="go">>></span>
				<div class="clear"></div>
			</div>
        </a>
    </div>
</div>
<?php get_footer(); ?>