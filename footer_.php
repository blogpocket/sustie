<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Susty
 */
?>

</div>
	

<?php
if ( is_front_page()  ) :
?>
	
<?php
else :
?>
        <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
<?php
endif;
?>


	<footer id="colophon">
		<a href="<?php echo esc_url( __( 'https://wordpress.org', 'susty' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'susty' ), 'WordPress' );
			?>
		</a>
		<span> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s basado en %3$s', 'susty' ), '<a href="https://lanztu.blog">Sustie</a>', '<a href="https://www.blogpocket.com">Blogpocket</a>', '<a href="https://susty.com">Susty</a>' );
			?>
                        
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
