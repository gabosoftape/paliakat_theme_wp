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
<!-- ################################################ clear code
<?php if ($wc_query->have_posts()) : ?>
    <div class="pwt_title">
      <h1>Productos</h1>
    </div>
    <div class="row pwt_con">
     	<?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
     	<div class="col-lg-4 col-md-4 col-xl-4">
       		<div class="pwt_card">
         		<div class="pwt_img">
           			<?php the_post_thumbnail(); ?>
         		</div>
		       <div class="pwt_dsc">
			        <div class="pwt_card_title">
			           <h5>
			             <?php the_title(); ?>
			           </h5>
			        </div>
			        <div class="pwt_card_dsc">
			           <p class="card-text">
			            <?php the_excerpt(); ?>
			           </p>
			           <a class="btn pwt_button" href="<?php the_permalink(); ?>">
			             Descubrir mas.
			           </a>
			        </div>
       			</div>
     		</div>
   		</div>
     	<?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
    <?php else:  ?>
          <?php _e( 'No Products' ); ?>
    <?php endif; ?>
-->
    <section class="after_products">
    	<?php if ($wc_query->have_posts()) : ?>
     	<div class="row fila1">
     		<div class="col-xl-12 pwt_title">
     			<h2>este es un titulo h2</h2>
     		</div>
     	</div>
     	<div class="row fila2">
     		<?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
     		<div class="col-lg-4 col-md-4 col-xl-4">
	       		<div class="pwt_card">
	         		<div class="pwt_img">
	           			<?php the_post_thumbnail(); ?>
	         		</div>
			       <div class="pwt_dsc">
				        <div class="pwt_card_title">
				           <h5>
				             <?php the_title(); ?>
				           </h5>
				        </div>
				        <div class="pwt_card_dsc">
				           <p class="card-text">
				            <?php the_excerpt(); ?>
				           </p>
				           <a class="btn pwt_button" href="<?php the_permalink(); ?>">
				             Descubrir mas.
				           </a>
				        </div>
	       			</div>
	     		</div>
   			</div>
     		<?php endwhile; ?>
     	</div>
     	<?php wp_reset_postdata(); ?>
	    <?php else:  ?>
	          <?php _e( 'No Products' ); ?>
	    <?php endif; ?>
     	<div class="row fila3">
     		<div class="col-xl-12">
     			<h2>este es ultimo titulo h2</h2>
     		</div>
     	</div>
    </section>

<?php get_footer();?>
