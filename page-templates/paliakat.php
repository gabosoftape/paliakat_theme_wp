<?php
/*
Template Name: Paliakat
Template Post Type: page
*/
get_header(); ?>
<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
<h3>Hola , soy un request de gabriel :p </h3>
<?php
$params = array('posts_per_page' => 3, 'post_type' => 'product');
$wc_query = new WP_Query($params);
?>
<ul>
     <?php if ($wc_query->have_posts()) : ?>
    <div class="row">
     <?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
     <div class="col-lg-4 col-md-4 col-xl-4">
       <div class="pwt_imagen">
         <?php the_post_thumbnail(); ?>
       </div>
       <div class="pwt_desc">
         <h5>
              <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a>
         </h5>
         <p>
          <?php the_excerpt(); ?>
         </p>
       </div>

     </div>
     <?php endwhile; ?>
     <?php wp_reset_postdata(); ?>
     <?php else:  ?>
     <li>
          <?php _e( 'No Products' ); ?>
     </li>
   </div>
     <?php endif; ?>
</ul>
<?php
get_footer();
