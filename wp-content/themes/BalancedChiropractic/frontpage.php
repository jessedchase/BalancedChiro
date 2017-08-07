<?php

/**
 * Front Page Template
 *
   Template Name:  Front Page
 *
 * @file           frontpage.php
 * @package        Balanced Chiropractic 
 * @author         Bozeman Interactive 
 * @copyright      2016 Bozeman Interactive
 */

get_header(); ?>
<div id="slider">
	<div class="slidercontainer">
	<?php
		if ( function_exists( 'soliloquy' ) ) { soliloquy( '28' ); }
	?>
	</div>
</div>
<div id="content" class="outerglow">
	<div class="container padding">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <?php the_content(); ?>
          <?php edit_post_link( $link, $before, $after, $id ); ?> <br/>
        <?php endwhile; endif; ?>
        
        <!--<a href="http://balancedchirohelena.appointy.com/" target="_blank">
        <div class="readmore outerglow">
        <span class="readmoretext">Schedule Online Now</span>
        <span class="go">>></span>
        <div class="clear"></div>
        </div>
        </a>-->
        <a href="https://www.balancedchirohelena.com/contact/">
        <div class="readmore outerglow">
        <span class="readmoretext">Contact Us Now</span>
        <span class="go">>></span>
        <div class="clear"></div>
        </div>
        </a>
    </div>
</div>
<?php get_footer(); ?>