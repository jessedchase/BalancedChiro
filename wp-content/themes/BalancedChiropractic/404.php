<?php get_header(); ?>
<div id="featured">
	<div class="container">
    	<div class="text">
            <h2>Page not found!</h2>
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
		} else{
			echo '
			
			<img width="3000" height="1749" src="http://www.balancedchirohelena.com/wp-content/uploads/2017/02/slide2.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://www.balancedchirohelena.com/wp-content/uploads/2017/02/slide2.jpg 3000w, http://www.balancedchirohelena.com/wp-content/uploads/2017/02/slide2-300x175.jpg 300w, http://www.balancedchirohelena.com/wp-content/uploads/2017/02/slide2-768x448.jpg 768w, http://www.balancedchirohelena.com/wp-content/uploads/2017/02/slide2-1024x597.jpg 1024w" sizes="(max-width: 3000px) 100vw, 3000px">';
		}
	?>
    
</div>
<div id="content">
	<div class="container padding">
		<div id="contactleft">
			<header class="header">
			<h1 class="entry-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
			</header>
			<section class="entry-content">
			<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
			<?php get_search_form(); ?>
			</section>
		</div>
		<div id="contactright">
        	<?php get_sidebar();?>
        </div>
        <div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>