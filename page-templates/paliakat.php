<?php
/*
Template Name: Paliakat
Template Post Type: page
*/
get_header(); ?>
<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
<h3>Hola , soy un request de gabriel :p </h3>
<?php
$params = array('posts_per_page' => 5, 'post_type' => 'product');
$wc_query = new WP_Query($params);
?>
<?php if ($wc_query->have_posts()) : ?>
<?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
<?php the_title(); ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else:  ?>
<p>
     <?php _e( 'No Products'); ?>
</p>
<?php endif; ?>
<?php
get_footer();
