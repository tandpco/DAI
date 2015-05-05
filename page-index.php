<?php
/**
 * Template Name: Home Page
 *
 * @package DAI
 */

get_header(); ?>


	<div class="content-break jumbotron main" style="background-image: url(<?php echo get_field('header_image')['url'] ?>);">
		<div class="container">
			<div class="row">
				<div class="col col-sm-12 col-md-8">
					<div class="content">
						<h1 class="shadow tr-up"><?php the_field('header_title') ?></h1>
						<p class="tr-up"><?php the_field('header_subtitle') ?></p>
						<a href="<?php the_field('header_link') ?>" class="btn btn-trapezoid trap-bot-right inline-block large">Learn More Now</a>
					</div>
					<div class="trapezoid-background"></div>
				</div>
			</div><!-- End Row -->
		</div><!-- End Container -->
	</div><!-- End Jumbotron -->

	<div class="subscription-bar">
		<div class="col col-sm-12 col-md-8 subscribe">
			<form>
				<div class="col col-sm-12 col-md-8">
					<h3 class="tr-up">Receive the DAI Monthly Newsletter</h3>
					<p>Get monthly updates directly in your email inbox. We’ll send you the latest in our progress to empower Kingdom leaders.</p>
				</div>
				<div class="col col-sm-12 col-md-4">
					<!-- <button type="submit">Subscribe Now</button> -->
					<a href="#">Subscribe Now</a>
				</div>
			</form>
		</div>
		<div class="col col-sm-12 col-md-4 social">
			<div class="col col-sm-3"><a href="<?php echo get_option('dai_settings')['facebook'] ?>"><div class="social-icon fb"><i class="fa fa-facebook"></i></div></a></div>
			<div class="col col-sm-3"><a href=""><div class="social-icon rss"><i class="fa fa-rss"></i></div></a></div>
			<div class="col col-sm-3"><a href="<?php echo get_option('dai_settings')['twitter'] ?>"><div class="social-icon tw"><i class="fa fa-twitter"></i></div></a></div>
			<div class="col col-sm-3"><a href="<?php echo get_option('dai_settings')['linkedin'] ?>"><div class="social-icon ln"><i class="fa fa-linkedin"></i></div></a></div>
		</div>
		<div class="stripes"></div>
	</div><!-- End Subscription Bar -->

	<section class="impact">
		<div class="container">
			<h2 class="shadow-beige tr-up align-center"><?php the_field('section_one_title') ?></h2>
			<p class="align-center"><?php the_field('section_one_subtext') ?></p>
			<div class="row clear-bottom">
				<?php
					$i = 0;
					while ($i++ <= 5):
				?>
					<div class="col col-sm-12 fifths align-center">
						<img src="<?php echo get_field('column_'.$i.'_icon')['url'] ?>" />
						<strong class="tr-up"><?php the_field('column_'.$i.'_header') ?></strong>
						<p><?php the_field('column_'.$i.'_text') ?></p>
					</div>
				<?php endwhile; ?>
			</div><!-- .row -->
		</div>
	</section><!-- section.impact -->

	<section class="bar">
		<div class="container align-center">
			<h4 class="tr-up inline-block"><img src="<?php echo get_template_directory_uri() ?>/public/images/globe.png" /> Give where needed most</h4>
			<span class="divider"></span>
			<span class="amount btn active" data-amount="50">$50</span>
			<span class="amount btn" data-amount="100">$100</span>
			<span class="amount btn" data-amount="250">$250</span>
			<span class="amount btn" data-amount="1000">$1,000</span>
			<a href="#" class="btn btn-trapezoid trap-bot-right tiny inline-block">Donate Now</a>
		</div>
	</section><!-- section.bar -->

	<section>
		<div class="container align-center-md">
			<h2 class="shadow-beige tr-up align-center"><?php the_field('section_two_title') ?></h2>
			<p class="align-center"><?php the_field('section_two_subtext') ?></p>
			<div class="coverflow-container">
				<div class="arrow left">
					<img class="left" src="<?php echo get_template_directory_uri(); ?>/public/images/arrow-left.png" />
				</div>
				<div class="arrow right">
					<img class="right" src="<?php echo get_template_directory_uri(); ?>/public/images/arrow-right.png" />
				</div>
				<div class="coverflow clearfix">
					<div class="cover">
						<div class="details">
							<div class="img">
								<img src="https://download.unsplash.com/photo-1428604467652-115d9d71a7f1" />
							</div>
							<a href="#" class="btn btn-outline inline-block tiny">Visit the page for this region</a>
							<h3 class="locale">Location</h3>
							<p class="description">Lorem ipsum dolor sit amet</p>
						</div>
					</div>
					<div class="cover">
						<div class="details">
							<div class="img">
								<img src="https://download.unsplash.com/photo-1428591501234-1ffcb0d6871f" />
							</div>
							<a href="#" class="btn btn-outline inline-block tiny">Visit the page for this region</a>
							<h3 class="locale">Location</h3>
							<p class="description">Lorem ipsum dolor sit amet</p>
						</div>
					</div>
					<div class="cover">
						<div class="details">
							<div class="img">
								<img src="https://download.unsplash.com/photo-1428342319217-5fdaf6d7898e" />
							</div>
							<a href="#" class="btn btn-outline inline-block tiny">Visit the page for this region</a>
							<h3 class="locale">Location</h3>
							<p class="description">Lorem ipsum dolor sit amet</p>
						</div>
					</div>
					<div class="cover">
						<div class="details">
							<div class="img">
								<img src="https://download.unsplash.com/photo-1423882503395-8571951e45cc" />
							</div>
							<a href="#" class="btn btn-outline inline-block tiny">Visit the page for this region</a>
							<h3 class="locale">Location</h3>
							<p class="description">Lorem ipsum dolor sit amet</p>
						</div>
					</div>
					<div class="cover">
						<div class="details">
							<div class="img">
								<img src="https://download.unsplash.com/photo-1422433555807-2559a27433bd" />
							</div>
							<a href="#" class="btn btn-outline inline-block tiny">Visit the page for this region</a>
							<h3 class="locale">Location</h3>
							<p class="description">Lorem ipsum dolor sit amet</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- section.bar -->
<?php get_footer(); ?>
