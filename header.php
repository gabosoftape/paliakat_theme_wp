<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?>
<?php

$shapely_transparent_header         = get_theme_mod( 'shapely_transparent_header', 0 );
$shapely_transparent_header_opacity = get_theme_mod( 'shapely_sticky_header_transparency', 100 );

if ( 1 == $shapely_transparent_header && $shapely_transparent_header_opacity ) {
	if ( $shapely_transparent_header_opacity < 100 ) {
		$style = 'style="background: rgba(255, 255, 255, 0.' . esc_attr( $shapely_transparent_header_opacity ) . ');"';
	} else {
		$style = 'style="background: rgba(255, 255, 255, ' . esc_attr( $shapely_transparent_header_opacity ) . ');"';
	}
} else {
	$style = '';
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="//cdn.shopify.com/s/files/1/1182/6070/t/8/assets/bold-bundles.css?192" rel="stylesheet" type="text/css" media="all" />
	<link href="https://fonts.googleapis.com/css?family=Archivo:400,700" rel="stylesheet">
	<link href="//cdn.shopify.com/s/files/1/1182/6070/t/8/assets/style.scss.css?192" rel="stylesheet" type="text/css" media="all" />
	<link rel="icon" type="image/png" href="//cdn.shopify.com/s/files/1/1182/6070/t/8/assets/favicon.ico?192" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>

	<header id="masthead" class="site-header<?php echo get_theme_mod( 'mobile_menu_on_desktop', false ) ? ' mobile-menu' : ''; ?>" role="banner">
		<div class="nav-container">
			<nav <?php echo $style; ?> id="site-navigation" class="main-navigation" role="navigation">
				<div class="container nav-bar">
					<div class="flex-row">
						<div class="hidden-sm hidden-xs">
						 	
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="before_nav">
								
								<a class="button_pais" href="https://paliakat.com/contacto"><i class="fa fa-arrow-down"></i>SELECCIONA TU PAÍS</a>
								<a class="button_login" href="https://paliakat.com/admin">INICIAR SESION</a>
							</div>
						</div>
					</div>
					<div class="flex-row">
						<div class="module left site-title-container">
							<?php shapely_get_header_logo(); ?>
						</div>
						<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
							<i class="fa fa-bars"></i>
						</div>
						<div class="module-group right">
							<div class="module left">
								<?php shapely_header_menu(); ?>
							</div>
							<!--end of menu module-->
							<div class="module widget-handle search-widget-handle hidden-xs hidden-sm">
								<div class="search">
									<i class="fa fa-search"></i>
									<span class="title"><?php esc_html_e( 'Site Search', 'shapely' ); ?>Buscar</span>
								</div>
								<div class="function">
									<?php
									get_search_form();
									?>
								</div>
							</div>
						</div>
						<!--end of module group-->
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	 <header class="header-p">
        <div class="container">
            <a href="../../../../" class="logo"> <?php shapely_get_header_logo(); ?> </a>
            <div class="header-in">
                <div class="menu-cont">
                  <div class="menu-cont-in">
                    <nav class="hidden-xs hidden-sm">
                        <div class="item accordion-cont"> <a class="accordion-button" href="/collections/all-man">Hombre</a>
                            <div class="accordion-content" style="display:none"><a href="/collections/all-man" >Todo Hombre</a><a href="/collections/playeras-manga-corta" >Manga Corta</a><a href="/collections/playera-manga-larga" >Manga Larga</a><a href="/collections/sudaderas-y-chaquetas" >Sudaderas & Chamarras</a><a href="/collections/pantalones" >Jeans & Joggers</a><a href="/collections/swimwear" >Trajes de Baño</a></div>
                        </div>
                        <div class="item accordion-cont"> <a class="accordion-button" href="/collections/mujer">Mujer</a>
                            <div class="accordion-content" style="display:none"><a href="/collections/mujer" >Todo Mujer</a><a href="/collections/denim-mujer" >Denim</a></div>
                        </div>
                        <div class="item accordion-cont"> <a class="accordion-button" href="/collections/youth-graphic-tees">Niños</a>
                            <div class="accordion-content" style="display:none"><a href="/collections/youth-graphic-tees" >Camisetas Gráficas</a><a href="/collections/pullover-youth" >Sudaderas</a></div>
                        </div>
                        <div class="item accordion-cont"> <a class="accordion-button" href="/collections/accesorios">Accesorios</a>
                            <div class="accordion-content" style="display:none"><a href="/collections/snapbacks" >Gorras</a><a href="/collections/gift-card/Tarjeta-de-Regalo" >Tarjetas de Regalo</a></div>
                        </div>
                        <div class="item"><a href="/collections/descuentos" class="">DESCUENTOS</a></div>
                        <div class="item"><a href="/pages/tiendas" class="">Tiendas</a></div>
                        <div class="item"><a href="/pages/about-us" class="">Nosotros</a></div>
                        <!-- <a href="archive.php">Men</a> <a href="archive.php">Women</a> <a href="archive.php">Youth</a> <a href="archive.php">Accesories</a> <a href="">Sale</a> <a href="locations.php">Locations</a> --></nav>
                  <div class="block visible-xs visible-sm">
                    <form action="/search" method="get" role="search">
                      <input type="hidden" name="type" value="product" />
                          <input type="submit" value="" /><input name="q" type="search" id="search-field" value="" placeholder="Buscar" />
                    </form>
                  </div>
                  <div class="block visible-xs visible-sm">
                    <nav>
                      
                      <div class="item">
                        	<a class="mobile-accordion-button">Hombre&nbsp;&nbsp;&nbsp;+</a>
                            <div class="accordion-content" style="display:none"><a href="/collections/all-man" >Todo Hombre</a><a href="/collections/playeras-manga-corta" >Manga Corta</a><a href="/collections/playera-manga-larga" >Manga Larga</a><a href="/collections/sudaderas-y-chaquetas" >Sudaderas & Chamarras</a><a href="/collections/pantalones" >Jeans & Joggers</a><a href="/collections/swimwear" >Trajes de Baño</a></div>
                      </div>
                      
                      
                      <div class="item">
                        	<a class="mobile-accordion-button">Mujer&nbsp;&nbsp;&nbsp;+</a>
                            <div class="accordion-content" style="display:none"><a href="/collections/mujer" >Todo Mujer</a><a href="/collections/denim-mujer" >Denim</a></div>
                      </div>
                      
                      
                      <div class="item">
                        	<a class="mobile-accordion-button">Niños&nbsp;&nbsp;&nbsp;+</a>
                            <div class="accordion-content" style="display:none"><a href="/collections/youth-graphic-tees" >Camisetas Gráficas</a><a href="/collections/pullover-youth" >Sudaderas</a></div>
                      </div>
                      
                      
                      <div class="item">
                        	<a class="mobile-accordion-button">Accesorios&nbsp;&nbsp;&nbsp;+</a>
                            <div class="accordion-content" style="display:none"><a href="/collections/snapbacks" >Gorras</a><a href="/collections/gift-card/Tarjeta-de-Regalo" >Tarjetas de Regalo</a></div>
                      </div>
                      
                      
                      
                      
                      
                      <!--<div class="item"><a href="/collections/descuentos">Descuentos</a></div>-->
                    </nav>
                  </div>  
                  <div class="block visible-xs visible-sm">
                    <nav>
                      <div class="item"><a href="/account">Mi cuenta</a></div>
                      <div class="item"><a href="/a/wishlist/">Mis favoritos</a></div>
                    </nav>
                  </div>
                  <div class="block visible-xs visible-sm">
                    <nav>
                      <div class="item"><a href="#" data-lion-account-link>Loyalty Program</a></div>
                      <div class="item"><a href="/pages/tiendas">Tiendas</a></div>
                      <div class="item"><a href="/pages/about-us/">Nosotros</a></div>
                      <div class="item"><a href="/pages/terms-and-policies">Terms & conditions</a></div>
                      <div class="item"><a href="/pages/faqs">Faqs</a></div>
                      <div class="item"><a href="/pages/contact-us/">Contacto</a></div>
                      <div class="item"><a href="/pages/sitemap">Sitemap</a></div>
                    </nav>
                  </div>
                  <div class="block visible-xs visible-sm">
                    <h6><img src="//cdn.shopify.com/s/files/1/1182/6070/t/8/assets/i-secure.svg?192" alt="secure"> <p>Pago seguro</p></h6>
                    <img src="//cdn.shopify.com/s/files/1/1182/6070/t/8/assets/metodos-pago.svg?192" alt="payments">
                  </div>
                  </div>
                </div>
                <div class="header-actions"><a href="/account/login" id="customer_login_link">Entrar</a>
<!--                     <a href="/cart" class="btn-cart site-header__cart-toggle js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false"> -->
                  	<a href="/cart" class="btn-cart">
                        <div class="count-cont"> <img src="//cdn.shopify.com/s/files/1/1182/6070/t/8/assets/shoppingbag.svg?192" alt="bag" class="bag">
                            <p id="CartCount">0</p>
                        </div>
                        <p><span class=money>$ 0.00 MXN</span></p>
                    </a>
                    <div class="search-cont">
                      	<div class="search-btn-mobile hidden-md hidden-lg">
                      		<img src="//cdn.shopify.com/s/files/1/1182/6070/t/8/assets/i-search.svg?192" alt="search">
                      	</div>
                        <div class="search-btn hidden-xs hidden-sm">
                          	<img src="//cdn.shopify.com/s/files/1/1182/6070/t/8/assets/i-search.svg?192" alt="search">
                            <p>Buscar</p>
                        </div>
                        <form action="/search" method="get" class="search-form right other-form" role="search">
                            <input type="submit" id="search-submit" value="" />
                            <input type="hidden" name="type" value="product" />
                            <input name="q" type="search" id="search-field" value="" />
                      </form>
                    </div>
                    <div class="menu-btn">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
           
            
           <div class="switch-btn">
              
              	
                 <a href="http://acapellastore.com/location">Selecciona tu país</a>
            </div>
          
         
      </div>
    </header>
	<div id="content" class="main-container">
		<?php if ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_404() && ! is_page_template( 'page-templates/template-widget.php' ) ) : ?>

			<!-- <div class="header-callout">
			php shapely_top_callout();
			</div> -->
		<?php endif; ?>

		<section class="content-area <?php echo ( get_theme_mod( 'top_callout', true ) ) ? '' : ' pt0 '; ?>">
			<div id="main" class="container1" role="main">
