<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package DAI
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function dai_body_classes( $classes ) {
  // Adds a class of group-blog to blogs with more than 1 published author.
  if ( is_multi_author() ) {
    $classes[] = 'group-blog';
  }

  return $classes;
}
add_filter( 'body_class', 'dai_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
  /**
   * Filters wp_title to print a neat <title> tag based on what is being viewed.
   *
   * @param string $title Default title text for current view.
   * @param string $sep Optional separator.
   * @return string The filtered title.
   */
  function dai_wp_title( $title, $sep ) {
    if ( is_feed() ) {
      return $title;
    }

    global $page, $paged;

    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
      $title .= " $sep $site_description";
    }

    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
      $title .= " $sep " . sprintf( __( 'Page %s', 'dai' ), max( $paged, $page ) );
    }

    return $title;
  }
  add_filter( 'wp_title', 'dai_wp_title', 10, 2 );

  /**
   * Title shim for sites older than WordPress 4.1.
   *
   * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
   * @todo Remove this function when WordPress 4.3 is released.
   */
  function dai_render_title() {
    ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
  }
  add_action( 'wp_head', 'dai_render_title' );

  function ajax_post () {

    $pid        = intval($_POST['post_id']);
    $the_query  = new WP_Query(array('p' => $pid));

    if ($the_query->have_posts()) {
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
          $data = '
            <div class="post-container">
                <div id="project-content">
                    <h1 class="entry-title">'.get_the_title().'</h1>
                    <div class="entry-content">'.get_the_content().'</div>
                </div>
            </div>  
          ';
      }
    } else {
      echo '<div id="postdata">'.__('Didnt find anything', THEME_NAME).'</div>';
    }
    
    wp_reset_postdata();

    echo '<div id="postdata">'.$data.'</div>';

  }

  add_action ( 'wp_ajax_nopriv_load-content', 'my_load_ajax_content' );
  add_action ( 'wp_ajax_load-content', 'my_load_ajax_content' );

endif;
