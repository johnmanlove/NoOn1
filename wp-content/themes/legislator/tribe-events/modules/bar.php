<?php
/**
 * Events Navigation Bar Module Template
 * Renders our events navigation bar used across our views
 *
 * $filters and $views variables are loaded in and coming from
 * the show funcion in: lib/Bar.php
 *
 * @package TribeEventsCalendar
 *
 */
?>

<?php

$filters = tribe_events_get_filters();
$views   = tribe_events_get_views();

$current_url = tribe_events_get_current_filter_url();
?>

<?php do_action('tribe_events_bar_before_template') ?>

<div id="tribe-events-bar">

	<form id="tribe-bar-form" class="tribe-clearfix" name="tribe-bar-form" method="post" action="<?php echo esc_attr( $current_url ); ?>">

		<!-- Mobile Filters Toggle -->

		<div id="tribe-bar-collapse-toggle" <?php if ( count( $views ) == 1 ) { ?> class="tribe-bar-collapse-toggle-full-width"<?php } ?>>
			<?php _e( 'Find Events', 'rescue' ) ?><span class="tribe-bar-toggle-arrow"></span>
		</div>

		<!-- Views -->
		<?php if ( count( $views ) > 1 ) { ?>

		<div id="tribe-bar-views">
			<div class="tribe-bar-views-inner tribe-clearfix">
				<h3 class="tribe-events-visuallyhidden"><?php _e( 'Event Views Navigation', 'rescue' ) ?></h3>
				<div class="large-1 columns">
				<label><?php _e( 'View As:', 'rescue' ); ?></label>
				</div>
				<div class="large-11 columns">
				<select class="tribe-bar-views-select tribe-no-param" name="tribe-bar-view">
					<?php foreach ( $views as $view ) : ?>
						<option <?php echo tribe_is_view( $view['displaying'] ) ? 'selected' : 'tribe-inactive' ?> value="<?php echo $view['url'] ?>" data-view="<?php echo $view['displaying'] ?>">
							<?php echo $view['anchor'] ?>
						</option>
					<?php endforeach; ?>
				</select>
				</div>
			</div><!-- .tribe-bar-views-inner -->
		</div><!-- .tribe-bar-views -->

		<?php } // if ( count( $views ) > 1 ) ?>

		<!-- Filters -->
		<?php if ( !empty( $filters ) ) { ?>
		<div class="tribe-bar-filters">
			<div class="tribe-bar-filters-inner tribe-clearfix">
				<?php foreach ( $filters as $filter ) : ?>
					<div class="<?php echo esc_attr( $filter['name'] ) ?>-filter">
						<label class="label-<?php echo esc_attr( $filter['name'] ) ?>" for="<?php echo esc_attr( $filter['name'] ) ?>"><?php echo $filter['caption'] ?></label>
						<?php echo $filter['html'] ?>
					</div>
				<?php endforeach; ?>
				<div class="tribe-bar-submit">
					<input class="tribe-events-button tribe-no-param" type="submit" name="submit-bar" value="<?php _e( 'Find Events', 'rescue' ) ?>" />
				</div><!-- .tribe-bar-submit -->
			</div><!-- .tribe-bar-filters-inner -->
		</div><!-- .tribe-bar-filters -->
		<?php } // if ( !empty( $filters ) ) ?>

	</form><!-- #tribe-bar-form -->

</div><!-- #tribe-events-bar -->

<?php do_action('tribe_events_bar_after_template') ?>
