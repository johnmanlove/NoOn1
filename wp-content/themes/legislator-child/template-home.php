<?php
/*
Template Name: Home
*/

get_header(); ?>


<div class="hero_section">

  <div class="row">

    <div class="large-12 columns">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'home' ); ?>

    <?php endwhile; // end of the loop. ?>

    <div class="home_widgets_hero">

    <div class="row">

  	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home_hero') ) : endif; ?>
        
    </div><!-- .row -->

  </div><!-- .home_widgets_hero -->

    </div><!-- .large-12 -->

  </div><!-- .row -->

</div> <!-- end .hero_section -->

<div class="main_content_wrap">

  <?php if ( of_get_option('home_events_area_show') ) { ?>

  <!-- Upcoming Events -->
  <div class="row home_text_blocks">
    <div class="large-12 columns">
      <div class="row">
        <div class="medium-3 columns">
          <h4>MAKE AN INFORMED DECISION</h4>
          <p>Proposition 1 appears to be about equal rights, but a closer look reveals a hidden agenda that allows anyone to enter a public restroom of the opposite sex just by stating a cross gender assignment. Read the full proposition before voting.</p>
        </div>
        <div class="medium-3 columns">
          <h4>LET’S LEARN FROM MISTAKES</h4>
          <p>Other cities and states with these laws have seen sexual predators use them to violate and hurt women and children. Mayor Parker’s “Equal Rights" ordinance could be used by heterosexual, sexual predators who pretend to be transgender to gain access to public restrooms.</p>
        </div>
        <div class="medium-3 columns">
          <h4>THERE ARE EXISTING EQUAL RIGHTS LAWS</h4>
          <p>All discrimination protections in Proposition 1 already exist in city, state and federal law. This ordinance only serves to impose sexual orientation, gender identity/expression and genetic information as protected classes with centralized power of investigation, fines and punishment under one person - the Mayor*</p>
        </div>
        <div class="medium-3 columns">
          <h4>A DIVERSE, CHURCH-BASED COALITION TO GUARD PRIVACY</h4>
          <p>Pastors and congregations across Houston have united to protect our families and their values. Join us as we make our voices heard November 3rd. Stand with your friends, family and neighbors as we vote on an issue that effects each of us. <a href="#">Get Involved</a></p>
        </div>
      </div>
    </div>
  </div>

    <div class="home_events_wrap clearfix">

      <div class="events_bg_image events_bg_image_pos bg_center_center">

        <div class="row">

          <hr>

          <div class="large-12 columns">

            <div class="row">

          	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home_events') ); ?>

            </div><!-- .row -->

          </div><!-- .large-12 -->

        </div><!-- .row -->

      </div><!-- .events_bg_image -->

    </div><!-- .home_events_wrap -->

  <?php } // end check for home events area show ?>

  <?php if ( of_get_option('home_bio_area_show') ) : ?>

  <div class="row home_bio">

    <?php if ( of_get_option( 'home_bio_image' ) ) { //check if there's a bio image ?>
    <div class="about_img columns">
        <img src="<?php echo of_get_option( 'home_bio_image' ); ?>" alt="<?php bloginfo('name'); ?>">
    </div><!-- .large-3 -->
    <?php } //end bio image check ?>

    <div class="columns">

    <h2 class="home_bio_title" style="<?php if ( !of_get_option( 'home_bio_image' ) ) { echo "text-align:center;"; }; ?>"><?php echo of_get_option( 'home_bio_section_title' ); ?></h2>
      
    <div class="row">

      <div class="large-12 columns">

      <?php if ( of_get_option( 'home_bio_summary' ) ) { ?>
       <p><?php echo of_get_option( 'home_bio_summary' ); ?></p> 
      <?php } ?>

      </div>

    </div><!-- .row -->

    </div><!-- .medium-9 -->

  </div><!-- .row .home_bio -->

  <?php endif; // end check for home bio area show ?>

  <?php if ( of_get_option('home_news_area_show') ) { ?>

  <div class="home_latest_news">

      <div class="row">

        <div class="large-3 columns">
          <h3><a href="<?php echo of_get_option( 'home_blog_link'); ?>"><?php echo of_get_option('home_news_title'); ?></a></h3>
        </div><!-- .large-2 -->

        <div class="large-9 columns"><hr></div>

      </div><!-- .row -->

      <div class="row">

      <div class="large-12 columns">

        <ul class="recent-news">

      <?php 
          $home_news_number = of_get_option( 'home_news_number');
          $formats = new WP_Query( array( // Display most recent standard posts
      		'posts_per_page' => $home_news_number,
      		'paged' => get_query_var('paged'),
      		'tax_query' => array(
      		  	array(
      		  	'taxonomy' => 'post_format',
      			  'field'    => 'slug',
      		  	'terms'    => array( 
                            'post-format-link', 
                            'post-format-aside', 
                            'post-format-gallery', 
                            'post-format-status', 
                            'post-format-quote', 
                            'post-format-chat', 
                            'post-format-image' ),
      		    'operator' => 'NOT IN',
      		  ))
          )
        );
      	if( $formats->have_posts() ) : while( $formats->have_posts() ) : $formats->the_post(); ?>

      <li>
      		<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

        <?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>

          <?php

                  $thumb = get_post_thumbnail_id();
                  $img_url = wp_get_attachment_url( $thumb ); //get img URL

                  $params = array( 'width' => 340, 'height' => 200 ); 
                  $image = bfi_thumb( "$img_url", $params ); ?>

            <div class="featured_image">
            <a href="<?php the_permalink(); ?>" class="featured_image_post inner_link_hover" title="<?php the_title(); ?>"><img alt="" src="<?php echo $image ?>" /></a>
            </div><!-- .featured_image -->

        <?php } // end image check ?>

      </li>

  <?php endwhile; endif; wp_reset_postdata(); // end most recent standard post ?>

  </ul>

  </div><!-- #home_post_slider -->

</div><!-- .row -->

  </div><!-- .home_latest_news -->

  <?php } // end check for latest news area show ?>

  <?php if ( of_get_option('home_gallery_area_show') ) { //check if we want to show the home gallery section ?>

  <div class="home_image_gallery clearfix">
    <div class="row ">

      <?php // Checking for Rescue Portfolio Plugin
      include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

      if ( is_plugin_active( 'rescue-portfolio/index.php' ) or is_plugin_active( 'rescue-portfolio-master/index.php' ) ) : ?>

        <div class="large-3 columns">
          <h3><a href="<?php echo of_get_option( 'home_gallery_link'); ?>"><?php echo of_get_option('home_gallery_title'); ?></a></h3>
        </div><!-- .large-2 -->

        <div class="large-9 columns"><hr></div>

    </div>

    <div class="row">

      <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3">

          <?php
              // Query Our Database
              $wpbp = new WP_Query(array( 'post_type' => 'portfolio', 'posts_per_page' =>'8' ) ); 

              // Begin The Loop
              if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); 

              // Get The Taxonomy 'Filter' Categories
              // $terms = get_the_terms( get_the_ID(), 'filter' ); 

              // Get the image URL
              $thumb = get_post_thumbnail_id();
              $img_url = wp_get_attachment_url( $thumb ); //get img URL
          ?>
                <li>
                  <div class="view view-first">
                  
                    <?php // Check for featured image
                      if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : 

                      $params = array( 'width' => 245, 'height' => 245 ); 
                      $image = bfi_thumb( "$img_url", $params ); ?>

                      <img alt="<?php echo get_the_title(); ?>" src="<?php echo $image ?>" />
                                       
                    <?php  endif; //end image check  ?> 

                    <div class="mask">
                        <h2><?php echo get_the_title(); ?></h2>
                        <!-- Fancybox Image -->
                        
                        <!-- Permalink -->
                        <a href="<?php the_permalink(); ?>" class="info" rel="gallery_group" title="<?php echo get_the_title(); ?> Details"><?php _e('Watch','rescue');?></a>
                    </div>

                    </div><!-- .view .view-first -->
                </li>
            
            <?php // $count++; // Increase the count by 1 ?>   
            <?php endwhile; endif; // END the Wordpress Loop ?>
            <?php wp_reset_query(); // Reset the Query Loop?>

      </ul><!-- .small-block-grid-1 medium-block-grid-4 large-block-grid-4 -->

    </div><!-- .row .home_image_gallery -->

  </div><!-- .home_image_gallery -->

  </div><!-- .main_content_wrap -->

    <?php endif; // end our plugin check ?>

  <?php } // end check for home gallery area show ?>

</div><!-- .main_content_wrap -->

<?php get_footer(); ?>