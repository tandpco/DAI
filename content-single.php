<?php
/**
 * @package DAI
 */
?>
	<div class="content-break jumbotron main">
		<div class="container">
			<div class="row">
				<div class="col col-sm-12 col-md-8">
					<div class="content">
						<?php the_title( '<h1 class="">', '</h1>' ); ?>
						<div class="entry-meta">
							<?php dai_posted_on(); ?>
						</div><!-- .entry-meta -->
					</div>
				</div>
			</div><!-- End Row -->
		</div><!-- End Container -->
	</div><!-- End Jumbotron -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container social">
		<a href="#" class="btn btn-social btn-em inline-block"><i class="fa fa-at"></i>email</a>
		<a href="#" class="btn btn-social btn-fb inline-block"><i class="fa fa-facebook-square"></i>facebook</a>
		<a href="#" class="btn btn-social btn-in inline-block"><i class="fa fa-linkedin"></i>linkedin</a>
		<a href="#" class="btn btn-social btn-tw inline-block"><i class="fa fa-twitter"></i>twitter</a>
		<a href="#" class="btn btn-social btn-gp inline-block"><i class="fa fa-google-plus"></i>google+</a>
		<a href="#" class="btn btn-social btn-pn inline-block"><i class="fa fa-pinterest"></i>pinterest</a>
	</div>
	<div class="container entry-content">
		<?php the_content(); ?>
		<?php
			/*wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'dai' ),
				'after'  => '</div>',
			) );*/
			//the_post_navigation();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php dai_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
