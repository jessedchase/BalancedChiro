<div class="clear"></div>
<div class="awards outerglow">
	<h2>Our Awards</h2>
	<img src="<?php echo get_site_url(); ?>/images/award0.jpg" alt="Helena Chiropractic Awards">
    <img src="<?php echo get_site_url(); ?>/images/award1.jpg" alt="Helena Chiropractic Awards">
    <img src="<?php echo get_site_url(); ?>/images/award5.jpg" alt="Helena Chiropractic Awards">
    <img src="<?php echo get_site_url(); ?>/images/award4.jpg" alt="Helena Chiropractic Awards">
    <img src="<?php echo get_site_url(); ?>/images/award3.jpg" alt="Helena Chiropractic Awards">
	<div class="clear"></div>
</div>

<div id="footer">
	<div class="container">
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    &copy; Balanced Chiropractic | Web Design by <a href="https://www.bozemaninteractive.com" title="Bozeman Website Design" target="_blank">Bozeman Interactive</a>
    </div>
</div>

<script>
$( document ).ready(function() {
	$('#mobilelink').click(function(){
		$( "#nav" ).slideToggle( "slow", function() {});
	});
	
});	
</script>
<?php wp_footer(); ?>

<script async>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88855202-1', 'auto');
  ga('send', 'pageview');

</script>

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?4wOC1LaqD1ngJWwR1IiHrKFLlUzU161Y";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
</body>
</html>