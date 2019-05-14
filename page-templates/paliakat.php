<?php
/*
Template Name: Paliakat
Template Post Type: page
*/
	get_header();
 ?>
<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
<?php
$params = array('posts_per_page' => 3, 'post_type' => 'product');
$wc_query = new WP_Query($params);
?> 
   <section class="after_products">
     	<div class="row fila1">
     		<div class="col-xl-12 col-lg-12 pwt_title">
     			<h2>Productos</h2>
     		</div>
     	</div>
     	<div class="row fila2">
     		<div class="col-xl-12 col-lg-12 pwt_title">
     			<?php echo do_shortcode('[sale_products]');?>
     		</div>
     	</div>
     	<!-- fila 3 --------------------------------------------------------- -->
     	<div class="row fila3">
     		<div class="col-xl-12">
     			<h2>este es ultimo titulo h2</h2>
     		</div>
     	</div>
    </section>
<?php get_footer(); ?>