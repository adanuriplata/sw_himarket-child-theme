<?php 
$himarket_colorset = himarket_options()->getCpanelValue('scheme');
$himarket_header_style = himarket_options()->getCpanelValue('header_style');
$himarket_my_phone = himarket_options()->getCpanelValue('phone_number');
$himarket_page_hotdeals = himarket_options()->getCpanelValue('hot_deals');
?>


<!-- START cnk hide top bar accoun menu user -->


<div class="yt-header-top">
	<div class="container">
		<div class="row">
		    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-5 sl-header-login">
		    	<?php get_template_part('widgets/himarket_top/login-header1'); ?>
		    </div>
		    <div class="header-right col-lg-9 col-md-8 col-sm-8 col-xs-7">
		        <div class="border-header">
				<!-- LANGUAGE_CURENCY -->
					<div class="top-links-action">
					<div class="phone pull-left">
					<?php if($himarket_my_phone != '') {?>
								    <i class="sp-ic fa fa-phone">&nbsp;</i><?php esc_html_e('Phone:','himarket') ;?> <a title="<?php echo esc_attr( $himarket_my_phone ) ?>" href="#"><?php echo esc_html( $himarket_my_phone ) ?></a> 
								<?php } ?>
					</div>
						<?php if (is_active_sidebar_HIMARKET('top')) {?>
								<?php dynamic_sidebar('top'); ?>
						<?php }?>
						
						<div class="my-account pull-right">
						    <ul>
						        <li>
						            <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php esc_html_e('My Account', 'himarket'); ?></a>
						        	<ul>
												<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php esc_html_e('My Account','himarket'); ?>"><?php esc_html_e('My Account','himarket'); ?></a></li>
												<?php 
													if( function_exists( 'YITH_WCWL' ) ){
														$wishlist_url = YITH_WCWL()->get_wishlist_url(); 															
													?>
												<li><a href="<?php echo esc_url( $wishlist_url ) ?>" title="<?php esc_html_e('My Wishlist','himarket'); ?>"><?php esc_html_e('My Wishlist', 'himarket'); ?></a></li>
												<?php } ?>
												<li><a href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>" title="<?php esc_attr_e( 'Cart', 'himarket' ) ?>"><?php esc_html_e('My Cart', 'himarket'); ?></a></li>
												<li><a href="<?php echo get_permalink(get_option('woocommerce_checkout_page_id')); ?>" title="<?php esc_attr_e( 'Check Out', 'himarket' ) ?>"><?php esc_html_e('Checkout', 'himarket'); ?></a></li>
							        </ul>
						        </li>
						        
						    </ul>
						</div>
					</div>
			    </div>
			</div>
		</div>
	</div>
</div>

<!-- END cnk hide top bar accoun menu user -->

<div class="yt-header-middle">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 logo-wrapper">
			    <div class="logo">
				<a  href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php if(himarket_options()->getCpanelValue('sitelogo')){ ?>
						<img src="<?php echo esc_attr( himarket_options()->getCpanelValue('sitelogo') ); ?>" alt="<?php bloginfo('name'); ?>"  width="201" height="62"/>
					<?php }else{
						if ($himarket_colorset){$logo = get_template_directory_uri().'/assets/img/logo-index4.png';}
						else $logo = get_template_directory_uri().'/assets/img/logo-default.png';
					?>
						<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php bloginfo('name'); ?>"  width="201" height="62"/>
					<?php } ?>
				</a>
				</div>
			</div>
			
			<div class="col-lg-7 col-md-7 col-sm-9 col-xs-8 yt-searchbox">
    		    <?php if ( has_nav_menu('primary_menu') ) {?>
						<nav id="primary-menu" class="primary-menu">
							<div class="yt-menu">
								<div class="navbar-inner navbar-inverse">
									<?php
										$menu_class = 'nav nav-pills';
										if ( 'mega' == himarket_options()->getCpanelValue('menu_type') ){
											$menu_class .= ' nav-mega';
										} else $menu_class .= ' nav-css';
									?>
									<?php wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => $menu_class)); ?>
								</div>
							</div>
						</nav>
					<?php } ?>
		    </div>
		<div class="yt_cart col-lg-2 col-md-2 col-sm-3 col-xs-4 ">
		    
			<!-- MiniCart -->
			<?php if( class_exists( 'WooCommerce' ) ){ ?>
			<div class="mini-cart-header">
			<?php get_template_part( 'woocommerce/minicart-ajax' ); ?>
			</div>
			<?php } ?>
			<div class="search-pro pull-right">
					<a class="phone-icon-search  fa fa-search" title="<?php esc_attr_e ('Search','himarket')?>"></a>
					<div id="sm_serachbox_pro" class="sm-serachbox-pro">
						
						<div class="sm-searbox-content">
							 <?php get_template_part( 'widgets/himarket_top/searchcate' ); ?>
			
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
</div>