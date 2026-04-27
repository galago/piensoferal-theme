<?php

/**
 * Blog posts index
 *
 * @package _tw
 */

get_header();
?>

<section id="primary">
    <main id="main" class="blog-archive-main">

        <header class="page-header blog-home-header">
            <h1 class="page-title">
                <?php single_post_title(); ?>
            </h1>
        </header>

        <?php if (have_posts()) : ?>

            <div class="blog-card-list">

                <?php
                while (have_posts()) :
                    the_post();

                    get_template_part('template-parts/content/content', 'excerpt');

                endwhile;
                ?>

            </div>

            <?php the_posts_pagination(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content/content', 'none'); ?>

        <?php endif; ?>

    </main>
</section>

<?php
get_footer();
