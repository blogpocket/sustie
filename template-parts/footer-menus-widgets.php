<?php
/**
 * Displays the menus and widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 *
 * @package WordPress
 * @subpackage Sustie
 * @since 1.0.0
 */

$has_goodbye = is_active_sidebar( 'goodbye' );

// Only output the container if there are elements to display.
if ( $has_goodbye ) {
	?>

	<div class="footer-nav-widgets-wrapper header-footer-group">

		<div class="footer-inner section-inner">

			

			<?php if ( $has_goodbye ) { ?>

				<aside class="footer-widgets-outer-wrapper" role="complementary">

					<div class="footer-widgets-wrapper">

						<?php if ( $has_goodbye ) { ?>

							<div class="footer-widgets column-one grid-item">
								<?php dynamic_sidebar( 'goodbye' ); ?>
							</div>

						<?php } ?>

					</div><!-- .footer-widgets-wrapper -->

				</aside><!-- .footer-widgets-outer-wrapper -->

			<?php } ?>

		</div><!-- .footer-inner -->

	</div><!-- .footer-nav-widgets-wrapper -->

<?php } ?>
