<?php
/**
 * The template for displaying the footer.
 *
 */
?>

 <?php if ( of_get_option('home_donation_show') ) : ?>

<div class="donation_wrap">
	
	<div class="row">
		
		<div class="large-4 large-centered columns">
			<a href="<?php echo esc_url( of_get_option('donation_button_link') ); ?>">
			<div class="donation_button"> <?php echo esc_attr( of_get_option('donate_button_text') ); ?> </div>
			</a>
		</div><!-- .large-4 large-centered -->

	</div><!-- .row -->

</div><!-- .donation_wrap -->

  <?php endif; // end check for home donation bar show ?>

<footer id="site_footer">

  <div class="row footer_widget_wrap">

  	<hr>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_sidebar') ) : endif; ?>

  </div><!-- .row .footer_widget_wrap -->

  <div class="footer_social">

    <div class="row">
      <div class="large-12 columns">
        <ul>

			<?php $twitter_icon = of_get_option( 'twitter_icon', '' ); if ( $twitter_icon  ) : ?> 
			<li><a href="<?php echo esc_url( $twitter_icon ); ?>"><i class="fa fa-twitter fa-1x"></i></a></li>
			<?php endif; ?>

			<?php $facebook_icon = of_get_option( 'facebook_icon', '' ); if ( $facebook_icon  ) : ?> 
			<li><a href="<?php echo esc_url( $facebook_icon ); ?>"><i class="fa fa-facebook fa-1x"></i></a></li>
			<?php endif; ?>

			<?php $google_icon = of_get_option( 'google_icon', '' ); if ( $google_icon  ) : ?> 
			<li><a href="<?php echo esc_url( $google_icon ); ?>"><i class="fa fa-google-plus fa-1x"></i></a></li>
			<?php endif; ?>

			<?php $instagram_icon = of_get_option( 'instagram_icon', '' ); if ( $instagram_icon  ) : ?> 
			<li><a href="<?php echo esc_url( $instagram_icon ); ?>"><i class="fa fa-instagram fa-1x"></i></a></li>
			<?php endif; ?>

			<?php $vimeo_icon = of_get_option( 'vimeo_icon', '' ); if ( $vimeo_icon  ) : ?> 
			<li><a href="<?php echo esc_url( $vimeo_icon ); ?>"><i class="fa fa-vimeo-square fa-1x"></i></a></li>
			<?php endif; ?>

			<?php $youtube_icon = of_get_option( 'youtube_icon', '' ); if ( $youtube_icon  ) : ?> 
			<li><a href="<?php echo esc_url( $youtube_icon ); ?>"><i class="fa fa-youtube fa-1x"></i></a></li>
			<?php endif; ?>

        </ul>
      </div><!-- .large-12 -->
    </div><!-- .row -->
    
  </div><!-- .footer_social -->

  <div class="footer_copyright">
    <div class="row">

      <div class="large-6 columns copyright">
        <span>&#169; <?php _e('Copyright','rescue'); ?> <?php echo esc_attr( date('Y') ) . ' '; echo wp_kses_post( of_get_option( 'footer_copyright' ) ); ?></span>
      </div><!-- .large-6 .copyright -->

      <div class="large-6 columns footer_menu">

			<?php 
				$defaults = array(
			        'theme_location' => 'footer',
			        'container' => false,
			        'menu_class' => '',
			        'depth' => 5,
			        'fallback_cb' => false,
			        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			        'walker' => new foundation_walker()
				);

				wp_nav_menu( $defaults );
			?>

      </div><!-- .large-6 .footer_menu -->

    </div><!-- .row -->
    
  </div><!-- .footer_copyright -->

</footer><!-- .site_footer -->

<?php wp_footer(); ?>

</body>
</html>