<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="msvalidate.01" content="521748F1F47161763512E42556266B7A" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_site_url(); ?>/images//apple-touch-icon.png">
<link rel="manifest" href="<?php echo get_site_url(); ?>/images//manifest.json">
<link rel="mask-icon" href="<?php echo get_site_url(); ?>/images//safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_site_url(); ?>/images/favicon.ico">
<meta name="theme-color" content="#ffffff">

<meta property="og:type" content="business.business">
<meta property="og:title" content="Balanced Chiropractic">
<meta property="og:url" content="https://www.balancedchirohelena.com">
<meta property="og:image" content="https://www.balancedchirohelena.com/images/logo.png">
<meta property="business:contact_data:street_address" content="800 Lola Street">
<meta property="business:contact_data:locality" content="Helena">
<meta property="business:contact_data:region" content="Montana">
<meta property="business:contact_data:postal_code" content="59601">
<meta property="business:contact_data:country_name" content="United States">
<meta property="business:contact_data:email" content="Balancedchirohelena@gmail.com">
<meta property="business:contact_data:phone_number" content="(406) 449-2501">
<meta property="business:contact_data:website" content="https://www.balancedchirohelena.com">
<meta property="place:location:latitude" content="46.590567">
<meta property="place:location:longitude" content="-111.972195">

<script type="application/ld+json"> { 
"@context" : "https://schema.org",
"@type" : "HealthClub", 
"address" : {
"@type": "PostalAddress",
"addressLocality": "Helena", 
"addressRegion": "Montana", 
"postalCode": "59601", 
"streetAddress": "800 Lola St" }, 
"name":"Balanced Chiropractic",
"url":"https://www.balancedchirohelena.com",
"email":"Balancedchirohelena@gmail.com",
"image":"https://www.balancedchirohelena.com/images/logo.png",
"telephone":"14064492501",
"openingHours": [ 
"Mo-Fr 07:00-18:00", "Sa 08:00-12:00"], 
"priceRange":"47"
} </script><script  src="https://www.balancedchirohelena.com/js/jquery.js"></script>
<link rel="publisher" href="https://plus.google.com/+BalancedChiropracticPCHelena">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="specialwrapper">
	<div id="specials">
        <a href="https://www.balancedchirohelena.com/wp-content/uploads/2017/03/2017-Grandopening-offer-new-phone-.pdf" target="_blank" class="outerglow"><img src="<?php echo get_site_url(); ?>/images/specialicon.png" alt="Helena Chiropractic Specials"><span>Specials</span></a>
    </div>
</div>
<div id="header" class="outerglow">
<div id="navtop">
	<div id="mobilespecials">
		<a href="https://www.balancedchirohelena.com/wp-content/uploads/2017/01/2017-Grandopening-offer.pdf" target="_blank" ><span>Specials</span></a>
	</div>
	<img src="/images/phone.png" alt="Call Helena Chiropractic" id="phoneicon"> <a href="tel:406-449-2501" id="phoneicontext">Call Us (406) 449-2501 </a>
	<div id="socialtop">
	<a href="https://www.facebook.com/balancedchirohelena/" target="_blank"><img src="/images/facebook.png" alt="Follow Balanced Chiropractic on Facebook!"></a>
	<a href="https://www.instagram.com/balancedchirohelena/" target="_blank"><img src="/images/instagram.png" alt="Follow Balanced Chiropractic on Instagram!"></a>
	<a href="https://www.youtube.com/channel/UCHKtEpffkXWCKjOR769q9VA" target="_blank"><img src="/images/youtube.png" alt="Follow Balanced Chiropractic on Youtube!"></a>
	</div>
</div>		
        <div id="logo">
        	<a href="<?php echo get_site_url(); ?>">
            	<img src="<?php echo get_site_url(); ?>/images/logo.png" alt="Helana Chiropractor, Balanced Chiropractic">
            </a>
        </div>
        <div id="leftnav" class="nav">
            <?php wp_nav_menu( array( 'menu' => 'Leftnav' )); ?>
        </div>
        <div id="rightnav" class="nav">
            <?php wp_nav_menu( array( 'menu' => 'Rightnav' )); ?>
        </div>
        <div id="mobilenavwrapper">
            <a href="javascript:void(0)" id="mobilelink">
                <img src="/images/mobile-menu.jpg" class="toolbaricon" alt="Helena Chiropractic Menu">
            </a> 
            <div class="clear"></div>
            <div id="nav">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
</div>