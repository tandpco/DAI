<?php
/**
 * Template Name: Programs Page
 *
 * @package DAI
 */

get_header(); ?>

	<div class="content-break jumbotron main">
		<div class="container">
			<div class="row">
				<div class="col col-sm-12 col-md-8">
					<div class="content">
						<h1 class="shadow tr-up">What We Do</h1>
						<p class="small">Through educating, mentorting, consulting, and connecting, DAI provides Christian leaders with tools that will help them meet the challenges they face every day.</p>
					</div>
					<div class="rail">
						<ul class="tabs">
							<li class="active">Overview</li>
							<li>Educate</li>
							<li>Mentor</li>
							<li>Consult</li>
							<li>Connect</li>
						</ul>
					</div>
					<div class="trapezoid-background"></div>
				</div>
			</div><!-- End Row -->
		</div><!-- End Container -->
	</div><!-- End Jumbotron -->

	<section class="impact">
		<div class="container">
			<p class="align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			<p class="align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			<div class="row clear-bottom">
				<div class="col col-sm-12 col-md-3 align-center program-column">
					<img src="<?php echo get_template_directory_uri() ?>/public/images/program-learn.png" />
					<strong class="shadow tr-up">Educate</strong>
					<p>Whether in DAI’s multi-day workshops or Masters of Arts in Organizational Leadership Program, we strive to develop our leaders through education that combines principles and knowledge along with practical application.</p>
					<a class="btn btn-fill btn-dashed inline-block small" href="#">Learn More</a>
				</div>
				<div class="col col-sm-12 col-md-3 align-center program-column">
					<img src="<?php echo get_template_directory_uri() ?>/public/images/program-communicate.png" />
					<strong class="shadow tr-up">Mentor</strong>
					<p>Even the most seasoned and gifted leader needs to be led and mentored. Recognizing this truth, DAI provides mentoring relationships for students that blend intentional friendship, discipleship, and skills coaching. </p>
					<a class="btn btn-fill btn-dashed inline-block small" href="#">Learn More</a>
				</div>
				<div class="col col-sm-12 col-md-3 align-center program-column">
					<img src="<?php echo get_template_directory_uri() ?>/public/images/program-suitcase.png" />
					<strong class="shadow tr-up">Consult</strong>
					<p>DAI consulting staff specialize in counseling leaders in the areas of leadership, strategic planning, organizational structure, finance, adult learning, research, and evaluation. This consulting helps leaders and ministries thrive in areas of struggle.</p>
					<a class="btn btn-fill btn-dashed inline-block small" href="#">Learn More</a>
				</div>
				<div class="col col-sm-12 col-md-3 align-center program-column">
					<img src="<?php echo get_template_directory_uri() ?>/public/images/program-connect.png" />
					<strong class="shadow tr-up">Connect</strong>
					<p>DAI is committed to connecting leaders and their organizations to other ministries and resources in an effort to find solutions to the challenges they face.</p>
					<a class="btn btn-fill btn-dashed inline-block small" href="#">Learn More</a>
				</div>
			</div><!-- .row -->
		</div>
	</section><!-- section.impact -->

	<section class="bar" style="margin-bottom: -30px; margin-top: 30px;">
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
<?php get_footer(); ?>
