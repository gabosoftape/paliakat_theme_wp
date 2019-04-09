<?php
/*
Template Name: Paliakat
Template Post Type: page
*/
get_header(); ?>
<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
<?php
$params = array('posts_per_page' => 3, 'post_type' => 'product');
$wc_query = new WP_Query($params);
?>
     <?php if ($wc_query->have_posts()) : ?>
    <div class="pwt_title">
      <h1>Productos</h1>
    </div>
    <div class="row pwt_con">
     <?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
     <div class="col-lg-4 col-md-4 col-xl-4">
       <div class="pwt_img">
         <?php the_post_thumbnail(); ?>
       </div>
       <div class="pwt_dsc">
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
          <?php _e( 'No Products' ); ?>
   </div>

     <?php endif; ?>
<?php
get_footer();
