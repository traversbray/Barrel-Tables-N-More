<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Custom Theme
 */

get_header('opening');
?>

<header id="masthead" class="site-header" role="banner">
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
      
    <!-- Brand and toggle get grouped for better mobile display -->
    <ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger" id="gnTrigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
                            
							<ul class="gn-menu">
								
								<li>
									<a href="#home"class="gn-icon icon-home3">Home</a>
								
								</li>
								<li><a href="#our-story" class="gn-icon icon-book">Our Story</a></li>
								<li><a href="#our-products" class="gn-icon icon-cart">Our Products</a></li>
								<li>
									<a href="#order-contact" class="gn-icon icon-pencil">Order / Contact</a>
                                </li>
                                <li>
									<a href="#social-section" class="gn-icon-alt fa-instagram">Social</a>
                                </li>
                                <li>
									<a href="#shipping-returns" class="gn-icon-alt fa-truck">Shipping / Returns</a>
                                </li>
                                <li>
									<a target="_blank" href="https://www.etsy.com/shop/BarrelTablesNMore" class="gn-icon fa-etsy">Etsy</a>
                                </li>
                             
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				
			</ul>
    
        <div class="nav-list">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                );
            ?>
        </div>
   </div>
</nav>
</header><!-- #masthead -->
<script>
jQuery(document).ready(function($){
    $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('#gnTrigger').addClass('fade-trigger');

    } else {
        $('#gnTrigger').removeClass('fade-trigger');
    }
    });

});
</script>
<div id="content" class="site-content">
