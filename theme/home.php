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

            <div class="blog-home-tools" aria-label="<?php esc_attr_e('Buscar y explorar el blog', '_tw'); ?>">
                <form role="search" method="get" class="blog-home-search" action="<?php echo esc_url(home_url('/')); ?>">
                    <label class="screen-reader-text" for="blog-home-search-field">
                        <?php esc_html_e('Buscar en el blog', '_tw'); ?>
                    </label>
                    <input
                        id="blog-home-search-field"
                        type="search"
                        class="blog-home-search__field"
                        name="s"
                        value="<?php echo esc_attr(get_search_query()); ?>"
                        placeholder="<?php esc_attr_e('Buscar...', '_tw'); ?>"
                    />
                    <button class="blog-home-search__submit" type="submit" aria-label="<?php esc_attr_e('Buscar', '_tw'); ?>">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <circle cx="11" cy="11" r="7"></circle>
                            <line x1="16.65" y1="16.65" x2="21" y2="21"></line>
                        </svg>
                    </button>
                </form>

                <?php
                $blog_category_labels = array(
                    'Noticias',
                    'Colonias Felina',
                    'Nutrición',
                    'Recetas',
                    'Comportamiento',
                    'Patologías',
                );
                ?>

                <nav class="blog-home-categories" aria-label="<?php esc_attr_e('Categorías del blog', '_tw'); ?>">
                    <?php foreach ($blog_category_labels as $category_label) : ?>
                        <?php
                        $category = get_term_by('name', $category_label, 'category');

                        if (! $category) {
                            $category = get_term_by('slug', sanitize_title($category_label), 'category');
                        }

                        $category_url = $category
                            ? get_term_link($category)
                            : home_url('/category/' . sanitize_title($category_label) . '/');

                        if (is_wp_error($category_url)) {
                            continue;
                        }
                        ?>

                        <a href="<?php echo esc_url($category_url); ?>">
                            <?php echo esc_html($category_label); ?>
                        </a>
                    <?php endforeach; ?>
                </nav>
            </div>
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
