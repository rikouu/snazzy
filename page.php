<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package     Snazzy
 * @link        https://themebeans.com/themes/snazzy
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main site-main--wrapper" role="main">

		<?php
		while ( have_posts() ) :

			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;
		?>

	</main>

</div>

<?php
get_footer();
