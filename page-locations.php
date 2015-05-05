<?php
/**
 * Template Name: Locations Browse Page
 *
 * @package DAI
 */

get_header(); ?>
  <div class="content-break jumbotron main">
    <div class="container">
      <div class="row">
        <div class="col col-sm-12 col-md-8">
          <div class="content">
            <h1 class="shadow tr-up">Where We Work</h1>
            <p>DAI trains leaders in some of the most remote places on earth. We’re thrilled to be apart of the work God is doing around the globe.</p>
            <!-- <a href="#" class="btn btn-trapezoid trap-bot-right inline-block large">Learn More Now</a> -->
          </div>
          <div class="trapezoid-background"></div>
        </div>
      </div><!-- End Row -->
    </div><!-- End Container -->
  </div><!-- End Jumbotron -->
  <div class="dashed-border">
	  <div class="container align-center-sm">
		  <h3 class="shadow-beige tr-up">DAI has a Global Footprint</h3>
		  <small>Here is the impact of DAI programs around the world.</small>
		  <div class="row align-center metrics main-numbers">
			  <div class="col col-sm-6 fifths"><p>2,015<small>Metric Name</small></p></div>
			  <div class="col col-sm-6 fifths"><p>2,015<small>Metric Name</small></p></div>
			  <div class="col col-sm-12 fifths"><p>2,015<small>Metric Name</small></p></div>
			  <div class="col col-sm-6 fifths"><p>2,015<small>Metric Name</small></p></div>
			  <div class="col col-sm-6 fifths"><p>2,015<small>Metric Name</small></p></div>
		  </div>
	  </div>
  </div>
  <div class="map-clickable-region" style="position: relative; margin-bottom: -35px;">
    <h2 class="shadow-beige tr-up" style="position: absolute; top: 10px; left: 0; right: 0; text-align: center;">Explore our Impact by Region
    <small style="display: block; font-size: 10px; text-shadow: none;">Select one of the nine regions DAI works in to explore that region further.</small>
    </h2>
    <a href="#" style="position: absolute; display: block; height: 12%; width: 9%; top: 30%; left: 19%;" title="North America">&nbsp;</a>
    <a href="#" style="position: absolute; display: block; height: 13%; width: 13%; top: 24%; left: 45%;" title="Europe and Central Asia">&nbsp;</a>
    <a href="#" style="position: absolute; display: block; height: 12%; width: 12%; top: 50%; left: 31%;" title="West Africa">&nbsp;</a>
    <a href="#" style="position: absolute; display: block; height: 13%; width: 14%; top: 43%; left: 58%;" title="Middle East &amp; North Africa">&nbsp;</a>
    <a href="#" style="position: absolute; display: block; height: 11%; width: 10%; top: 33%; left: 79%;" title="East Asia">&nbsp;</a>
    <a href="#" style="position: absolute; display: block; height: 13%; width: 9%; top: 72%; left: 16%;" title="Latin America">&nbsp;</a>
    <a href="#" style="position: absolute; display: block; height: 12%%; width: 14%%; top: 72%; left: 38%;" title="Francophone Africa">&nbsp;</a>
    <a href="#" style="position: absolute; display: block; height: 14%; width: 8%; top: 64%; left: 60%;" title="East Africa">&nbsp;</a>
    <a href="#" style="position: absolute; display: block; height: 11%; width: 12%; top: 53%; left: 83%;" title="South Asia">&nbsp;</a>
    <img id="map" src="<?php echo get_template_directory_uri(); ?>/public/images/map.png" />
    <div class="show-sm">
      <a href="#" class="purple">North America</a>
      <a href="#" class="purple">Middle East &amp; North Africa</a>
      <a href="#" class="red">West Africa</a>
      <a href="#" class="red">South Asia</a>
      <a href="#" class="blue">East Asia</a>
      <a href="#" class="blue">Francophone Africa</a>
      <a href="#" class="green">Europe and Central Asia</a>
      <a href="#" class="green">Latin America</a>
      <a href="#" class="green">East Africa</a>
    </div>
  </div>
<?php get_footer(); ?>

