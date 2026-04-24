<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _tw
 */

get_header();
?>

<section id="primary">
	<main id="main">

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content/content', 'single');

			if (is_singular('post')) {
				get_template_part('template-parts/author-box');

				the_post_navigation(
					array(
						'next_text' => '<span aria-hidden="true">' . __('Next Post', '_tw') . '</span> ' .
							'<span class="sr-only">' . __('Next post:', '_tw') . '</span> <br/>' .
							'<span>%title</span>',
						'prev_text' => '<span aria-hidden="true">' . __('Previous Post', '_tw') . '</span> ' .
							'<span class="sr-only">' . __('Previous post:', '_tw') . '</span> <br/>' .
							'<span>%title</span>',
					)
				);
			}

			if (comments_open() || get_comments_number()) {
				comments_template();
			}

		endwhile;
		?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
