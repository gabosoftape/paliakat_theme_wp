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
       <div class="card" style="width: 18rem;">
       <div class="pwt_img">
         <img class="card-img-top" src="<?php the_post_thumbnail(); ?>" alt="Card image cap">
       </div>
       <div class="pwt_dsc card-body">
         <h5 class="card-title">
           <?php the_title(); ?>
         </h5>
         <p class="card-text">
          <?php the_excerpt(); ?>
         </p>
         <a class"btn btn-primary" href="<?php the_permalink(); ?>">
           Descubrir mas.
         </a>
       </div>

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
