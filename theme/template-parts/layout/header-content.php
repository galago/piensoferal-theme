<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>

<header id="masthead" class="flex px-10 py-2 gap-5 items-center bg-homepage-bg text-white font-sans">

	<div class="flex-none">
		<!-- <?php
				if (is_front_page()) :
				?>
			<h1><?php bloginfo('name'); ?></h1>
		<?php
				else :
		?>
			<p><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
		<?php
				endif;

				$_tw_description = get_bloginfo('description', 'display');
				if ($_tw_description || is_customize_preview()) :
		?>
			<p><?php echo $_tw_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
				?></p>
		<?php endif; ?> -->
		<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
			<img
				src="/wp-content/uploads/2024/12/logos-mail-2-formularioweb-01.png"
				alt="Homepage Logo"
				class="aspect-2/1 max-h-[83px]">
		</a>
	</div>

	<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', '_tw'); ?>" class="grow">
		<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', '_tw'); ?></button> -->

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'	=> 'flex w-full h-full justify-around uppercase',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->

	<!-- Search -->
	<div class="relative group">

		<button aria-label="Search">
			<svg xmlns="http://www.w3.org/2000/svg"
				class="w-6 h-6"
				fill="none"
				viewBox="0 0 24 24"
				stroke="currentColor">
				<circle cx="11" cy="11" r="7" stroke-width="2" />
				<line x1="16.65" y1="16.65" x2="21" y2="21"
					stroke-width="2"
					stroke-linecap="round" />
			</svg>
		</button>

		<div
			class="absolute right-0 w-64 bg-white p-4 shadow-lg rounded
		opacity-0 invisible translate-y-2
		transition-all duration-200 ease-out
		group-hover:opacity-100
		group-hover:visible
		group-hover:translate-y-0">
			<?php get_search_form(); ?>
		</div>

	</div>



</header><!-- #masthead -->