<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-wrapper">
			<?php shoreditch_social_menu(); ?>

<!-- ↓編集可ここから↓ -->

			<div id="pageFoot">
				<div class="MainLogo">
					<figure class="resizeimage"><img class="size-full wp-image-338 aligncenter" src="http://plus-info-tech.local/wp-content/images/plusit_w840_h420.jpg" alt="" /></figure>
				</div>
				<div class="MainMenu">
					© +IT All Rights Reserved.
				</div>
			</div>

	<!-- ↑編集可ここまで↑ -->

			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shoreditch' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'shoreditch' ), 'WordPress' ); ?></a>
				<span class="sep">/</span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'shoreditch' ), 'Shoreditch', '<a href="https://wordpress.com/themes/" rel="designer">Automattic</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .site-footer-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
