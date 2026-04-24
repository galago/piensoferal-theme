<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>

<header id="masthead" class="fixed top-0 inset-x-0 z-50 px-4 py-2 font-sans text-white border-b bg-homepage-bg/95 border-white/10 backdrop-blur md:px-8 md:py-3">

	<div class="flex flex-col w-full gap-3 mx-auto max-w-7xl md:flex-row md:items-center md:justify-between">

		<div class="flex items-center justify-between">
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
					class="h-auto max-h-[64px] w-auto md:max-h-[83px]">
			</a>

			<button
				id="mobile-menu-toggle"
				class="inline-flex items-center justify-center p-2 md:hidden"
				aria-controls="primary-menu"
				aria-expanded="false"
				aria-label="<?php esc_attr_e('Toggle navigation', '_tw'); ?>">
				<span class="sr-only"><?php esc_html_e('Toggle navigation', '_tw'); ?></span>
				<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<path d="M4 7h16M4 12h16M4 17h16" stroke-width="2" stroke-linecap="round" />
				</svg>
			</button>
		</div>

		<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', '_tw'); ?>" class="w-full md:flex-1">
			<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', '_tw'); ?></button> -->

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	=> 'hidden max-h-[calc(100vh-9rem)] w-full flex-col gap-y-2 overflow-y-auto rounded bg-black/40 p-3 text-left text-sm uppercase md:flex md:max-h-none md:w-full md:flex-row md:flex-nowrap md:items-start md:justify-between md:gap-x-3 md:gap-y-0 md:overflow-visible md:bg-transparent md:p-0 md:text-center md:text-xs lg:text-sm',
					'fallback_cb'    => false,
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<!-- Search -->
		<div class="relative hidden w-full md:block md:w-auto group focus-within:z-20">

			<button aria-label="Search" class="flex items-center justify-center md:p-1">
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
				class="invisible w-full p-3 mt-2 text-black transition-all duration-200 ease-out translate-y-2 bg-white rounded shadow-lg opacity-0 md:absolute md:right-0 md:mt-0 md:w-64 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 group-focus-within:opacity-100 group-focus-within:visible group-focus-within:translate-y-0">
				<?php get_search_form(); ?>
			</div>

		</div>

		<div id="mobile-search-panel" class="hidden md:hidden">
			<?php get_search_form(); ?>
		</div>

	</div>

</header><!-- #masthead -->
