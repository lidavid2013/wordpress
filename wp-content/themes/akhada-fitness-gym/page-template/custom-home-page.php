<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'akhada_fitness_gym_above_slider' ); ?>

<section id="banner">
	<?php $akhada_fitness_gym_banner_page = array();
    $mod = absint( get_theme_mod( 'akhada_fitness_gym_slider' ));
    if ( 'page-none-selected' != $mod ) {
    	$akhada_fitness_gym_banner_page[] = $mod;
    }
  	if( !empty($akhada_fitness_gym_banner_page) ) :
      $args = array(
        'post_type' => 'page',
        'post__in' => $akhada_fitness_gym_banner_page,
        'orderby' => 'post__in'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
      	while ( $query->have_posts() ) : $query->the_post(); ?> 
          <?php the_post_thumbnail(); ?>
          <div class="banner-content">
            <h1><?php esc_html(the_title()); ?></h1>
          	<p><?php $excerpt = get_the_excerpt(); echo esc_html( akhada_fitness_gym_string_limit_words( $excerpt, 15)); ?></p>
          	<div class="more-btn">
            	<a href="<?php esc_url(the_permalink()); ?>"><?php esc_html_e('Read More','akhada-fitness-gym'); ?><i class="fas fa-long-arrow-alt-right"></i><span class="screen-reader-text"><?php esc_html_e('Read More','akhada-fitness-gym'); ?></span></a>
          	</div> 
        	</div>                  
     	  <?php endwhile; ?>
      <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
  	endif; wp_reset_postdata();?>
  	<div class="clearfix"></div>
</section> 

<?php do_action('akhada_fitness_gym_befor_service_section'); ?>

<?php /*--OUR SERVICES--*/?>
<section id="our-services">
	<?php if( get_theme_mod('akhada_fitness_gym_service_title') != ''){ ?>
  	<h2 class="subtitle"><?php echo esc_html(get_theme_mod('akhada_fitness_gym_service_title','')); ?></h2>
  <?php }?>
 	<div class="container">
  	<div class="row m-0">
  		<?php $akhada_fitness_gym_catData1=  get_theme_mod('akhada_fitness_gym_service_category'); 
  		if($akhada_fitness_gym_catData1){ 
  			$page_query = new WP_Query(array( 'category_name' => esc_html($akhada_fitness_gym_catData1 ,'akhada-fitness-gym')));?>
    		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>	
    			<div class="col-lg-6 col-md-12 service-main-box">
    				<div class="service-image">
							<?php the_post_thumbnail(); ?>
						</div>
    				<div class="service-content">
            	<h3><?php esc_html(the_title()); ?></h3>
              <p><?php $excerpt = get_the_excerpt(); echo esc_html( akhada_fitness_gym_string_limit_words( $excerpt,12 ) ); ?></p>
              <a href="<?php esc_url(the_permalink()); ?>"><?php esc_html_e('Read More','akhada-fitness-gym'); ?><i class="fas fa-long-arrow-alt-right"></i><span class="screen-reader-text"><?php esc_html_e('Read More','akhada-fitness-gym'); ?></span></a>
            </div>
			    </div>    	
    		<?php endwhile; 
    		wp_reset_postdata();
    	}?>
	  </div>
	</div> 
</section>

<?php do_action('akhada_fitness_gym_after_services_section'); ?>

<div class="container">
  	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>