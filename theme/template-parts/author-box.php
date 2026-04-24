<?php

/**
 * Author box
 *
 * @package _tw
 */

if (! is_singular('post')) {
	return;
}

$author_id   = get_the_author_meta('ID');
$author_name = get_the_author_meta('display_name', $author_id);
$author_url  = get_author_posts_url($author_id);
$avatar      = get_avatar_url($author_id, array('size' => 120));
$bio         = get_the_author_meta('description', $author_id);

/* Optional custom field for role */
$role = get_user_meta($author_id, 'author_role', true);
?>

<div class="author-box-ka">
	<img
		class="author-box-ka__avatar"
		src="<?php echo esc_url($avatar); ?>"
		alt="<?php echo esc_attr($author_name); ?>"
		width="120"
		height="120"
		loading="lazy"
		decoding="async">

	<div class="author-box-ka__content">
		<h3 class="author-box-ka__name">
			<a href="<?php echo esc_url($author_url); ?>" rel="author">
				<?php echo esc_html($author_name); ?>
			</a>
		</h3>

		<?php if ($role) : ?>
			<p class="author-box-ka__role">
				<?php echo wp_kses_post($role); ?>
			</p>
		<?php endif; ?>

		<?php if ($bio) : ?>
			<p class="author-box-ka__bio">
				<?php echo esc_html($bio); ?>
			</p>
		<?php endif; ?>
	</div>
</div>