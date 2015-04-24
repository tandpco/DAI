<?php
/**
 * Template Name: Home Page
 *
 * @package DAI
 */

get_header(); ?>


	<div class="content-break jumbotron main">
		<div class="container">
			<div class="row">
				<div class="col col-sm-12 col-md-8">
					<div class="content">
						<h1 class="shadow tr-up">DAI Empowers<br>Kingdom Leaders</h1>
						<p class="tr-up">GROWING EFFECTIVE SERVANT LEADERS TO IMPACT THEIR LOCAL COMMUNITIES.</p>
						<a href="#" class="btn btn-trapezoid trap-bot-right inline-block large">Learn More Now</a>
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
			<div class="col col-sm-3"><div class="social-icon fb"><i class="fa fa-facebook"></i></div></div>
			<div class="col col-sm-3"><div class="social-icon rss"><i class="fa fa-rss"></i></div></div>
			<div class="col col-sm-3"><div class="social-icon tw"><i class="fa fa-twitter"></i></div></div>
			<div class="col col-sm-3"><div class="social-icon ln"><i class="fa fa-linkedin"></i></div></div>
		</div>
		<div class="stripes"></div>
	</div><!-- End Subscription Bar -->

	<section class="impact">
		<div class="container">
			<h2 class="shadow-beige tr-up align-center">How DAI Is Making an Impact</h2>
			<p class="align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore<br>magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
			<div class="row clear-bottom">
				<div class="col col-sm-12 fifths align-center">
					<img src="<?php echo get_template_directory_uri() ?>/public/images/index-education.png" />
					<strong class="tr-up">Education</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
				</div>
				<div class="col col-sm-12 fifths align-center">
					<img src="<?php echo get_template_directory_uri() ?>/public/images/index-education.png" />
					<strong class="tr-up">MAOL</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
				</div>
				<div class="col col-sm-12 fifths align-center">
					<img src="<?php echo get_template_directory_uri() ?>/public/images/index-education.png" />
					<strong class="tr-up">Mentoring</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
				</div>
				<div class="col col-sm-12 fifths align-center">
					<img src="<?php echo get_template_directory_uri() ?>/public/images/index-education.png" />
					<strong class="tr-up">Consulting</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
				</div>
				<div class="col col-sm-12 fifths align-center">
					<img src="<?php echo get_template_directory_uri() ?>/public/images/index-education.png" />
					<strong class="tr-up">Connecting</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
				</div>
			</div><!-- .row -->
		</div>
	</section><!-- section.impact -->

	<section class="bar">
		<div class="container align-center-md">
			<h4 class="tr-up inline-block"><img src="<?php echo get_template_directory_uri() ?>/public/images/globe.png" /> Give where needed most</h4>
			<span class="divider"></span>
			<span class="amount btn active" data-amount="50">$50</span>
			<span class="amount btn" data-amount="100">$100</span>
			<span class="amount btn" data-amount="250">$250</span>
			<span class="amount btn" data-amount="1000">$1,000</span>
			<a href="#" class="btn btn-trapezoid trap-bot-right tiny inline-block">Donate Now</a>
		</div>
	</section><!-- section.bar -->

	<section class="slider">
		<div class="container align-center-md">
			<h2 class="shadow-beige tr-up align-center">How DAI Is Making an Impact</h2>
			<p class="align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore<br>magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
			<div class="slider">
				<ul>
					<li class="slide"><img src="https://download.unsplash.com/photo-1428604467652-115d9d71a7f1" /></li>
					<li class="slide"><img src="https://download.unsplash.com/photo-1428591501234-1ffcb0d6871f" /></li>
					<li class="slide"><img src="https://download.unsplash.com/photo-1428342319217-5fdaf6d7898e" /></li>
					<li class="slide"><img src="https://download.unsplash.com/photo-1423882503395-8571951e45cc" /></li>
					<li class="slide"><img src="https://download.unsplash.com/photo-1422433555807-2559a27433bd" /></li>
				</ul>
			</div>
		</div>
	</section><!-- section.bar -->

<?php get_footer(); ?>
