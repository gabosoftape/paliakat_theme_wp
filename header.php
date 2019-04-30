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
								<div class="search-btn hidden-xs hidden-sm">
									<h3>| Buscar </h3> 
		                          	<img src="//cdn.shopify.com/s/files/1/1182/6070/t/8/assets/i-search.svg?192" alt="search">
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
	<div id="content" class="main-container">
		<?php if ( ! is_page_template( 'page-templates/template-home.php' ) && ! is_404() && ! is_page_template( 'page-templates/template-widget.php' ) ) : ?>

			<!-- <div class="header-callout">
			php shapely_top_callout();
			</div> -->
		<?php endif; ?>

		<section class="content-area <?php echo ( get_theme_mod( 'top_callout', true ) ) ? '' : ' pt0 '; ?>">
			<div id="main" class="container1" role="main">
