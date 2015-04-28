<?php
/**
 * Template Name: Style Guide
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package DAI
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<h1>Header Styles</h1>
				<div class="row">
					<div class="col col-sm-12 col-md-2">
						<h2 class="tr-up shadow">Who We Are</h2>
					</div>
					<div class="col col-sm-12 col-md-2">
						<h2>MAOL</h2>
					</div>
				</div>
				<h1>Paragraph Styles</h1>
				<p>Development Associates International (DAI) is passionate about providing opportunities for the Holy Spirit to grow leaders. Since 1996, DAI has been listening to the local leaders of the Church share about what they need. In response, we create, use, and distribute interactive educational tools to help those leaders grow in their integrity and effectiveness. The ultimate goal is to see a stronger local church emerge that can deeply impact its community.</p>
				<h1>Button Styles</h1>
				<a href='#' class='btn btn-outline inline-block small'>Next</a>
				<a href='#' class='btn btn-fill btn-dashed inline-block small'>Learn More</a>
				<a href='#' class='btn btn-trapezoid trap-bot-right inline-block tiny'>Donate Now</a>

				<div class="row">
					<div class="col col-sm-12">
						<h2>Tab Control</h2>
						<section class="tab-control">
							<ul class="tabs clearfix">
								<li class="selected"><a class="tab tr-up" id="one">One</a></li>
								<li><a href="#" class="tab tr-up" id="two">Two</a></li>
								<li><a href="#" class="tab tr-up" id="three">Three</a></li>
							</ul>
						</section>
					</div>
					<section>
						<div class="tab-panel one">One</div> 
						<div class="tab-panel hidden two">Two</div> 
						<div class="tab-panel hidden three">Three</div> 
					</section>
				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
