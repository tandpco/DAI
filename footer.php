<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package DAI
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col col-sm-12 col-md-3 align-center-sm">
					<img src="<?php echo get_template_directory_uri(); ?>/public/images/DAI_logo.png" height="66" width="157">
				</div>
				<div class="col col-sm-12 col-md-6">
					<div class="footer-attr">
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
						<address>P.O. Box 49278, Colorado Springs, CO 80849 / 1-866-907-7970</address>
						<address>&copy; <?php echo date("Y"); ?> Development Associates International</address>
					</div>
				</div>
				<div class="col col-sm-12 col-md-3 align-center-sm align-right-md">
					<img src="<?php echo get_template_directory_uri(); ?>/public/images/footer_badge-one.png" style="display: inline; vertical-align: middle;">
					<img src="<?php echo get_template_directory_uri(); ?>/public/images/footer_badge-two.png" style="display: inline; vertical-align: middle;">
				</div>
			</div><!-- End Row -->
		</div><!-- End Container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
