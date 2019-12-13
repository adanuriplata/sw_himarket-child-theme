<?php 
$himarket_colorset = himarket_options()->getCpanelValue('scheme');
$himarket_header_style = himarket_options()->getCpanelValue('header_style');
$himarket_my_phone = himarket_options()->getCpanelValue('phone_number');
$himarket_page_hotdeals = himarket_options()->getCpanelValue('hot_deals');
?>


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