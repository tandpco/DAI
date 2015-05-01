<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package DAI
 */

get_header(); ?>

	<div id="primary" class="content-area col col-sm-12 col-md-9">
		<main id="main" class="site-main row" role="main">
		<?
		$args = array(
			'post__in'  => get_option( 'sticky_posts' )
		);
		$query = new WP_Query( $args );
		?>
		<?php if ( $query->have_posts() ) : ?>

			<div class="posts posts-<?php echo $query->found_posts ?>">

			<?php if ($query->found_posts >= 4) : ?>
				
				<?php 
					$query = $query->query;
					$first = array_values($query)[0][0];
					$second = array_values($query)[0][1];
					$third = array_values($query)[0][2];
					$last = array_values($query)[0][3];
				?>

				<table class="table posts posts-4">
					<tr>
						<td class="post post-1" rowspan="2" colspan="2" style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($first), 'full')[0] ?>)">
							<article>
								<?php $content = mb_strimwidth(get_the_content_by_id($first), 0, 175, '...'); ?>
								<h1><a href="<?php echo get_the_permalink($first) ?>"><?php echo get_the_title($first) ?></a></h1>
								<div class="entry-content">
									<p><?php echo $content ?></p>
								</div>
							</article>
						</td>
						<td class="post post-2" rowspan="1" colspan="2" style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($second), 'full')[0] ?>)">
							<article>
								<?php $content = mb_strimwidth(get_the_content_by_id($second), 0, 175, '...'); ?>
								<h1><a href="<?php echo get_the_permalink($second) ?>"><?php echo get_the_title($second) ?></a></h1>
								<div class="entry-content">
									<p><?php echo $content ?></p>
								</div>
							</article>
						</td>
					</tr>
					<tr>
						<td class="post post-3" colspan="1" style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($third), 'full')[0] ?>)">
							<article>
								<?php $content = mb_strimwidth(get_the_content_by_id($third), 0, 175, '...'); ?>
								<h1><a href="<?php echo get_the_permalink($third) ?>"><?php echo get_the_title($third) ?></a></h1>
								<div class="entry-content">
									<p><?php echo $content ?></p>
								</div>
							</article>
						</td>
						<td class="post post-4" colspan="1" style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($last), 'full')[0] ?>)">
							<article>
								<?php $content = mb_strimwidth(get_the_content_by_id($last), 0, 175, '...'); ?>
								<h1><a href="<?php echo get_the_permalink($last) ?>"><?php echo get_the_title($last) ?></a></h1>
								<div class="entry-content">
									<p><?php echo $content; ?></p>
								</div>
							</article>
						</td>
					</tr>
				</table>

			<?php else: ?>

				<?php /* Start the Loop */ $i = 0; ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						$i = $i+1;
						echo '<div class="post post-'.$i.'" style="background-image: url('.wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0].')">';
						echo '<article>';
						echo '<h1><a href="';
						echo get_the_permalink();
						echo '">';
						echo get_the_title();
						echo '</a>';
						echo '</h1>';
						// $content = get_the_content();
						$content = mb_strimwidth(get_the_content(), 0, 175, '...');
						echo '<div class="entry-content"><p>'.$content.'</p></div>';
						echo '</article>';
						echo '</div>';
					?>
				<?php endwhile; ?>

			<?php endif; ?>

			</div>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="col col-sm-12 col-md-3">
	<?php get_sidebar('blog'); ?>
</div>
<div class="post-nav">
	<?php the_posts_navigation(); ?>
</div>
<?php get_footer(); ?>
