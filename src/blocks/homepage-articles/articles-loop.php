<?php
/**
 * Articles loop template.
 *
 */

/**
 * @global \WP_Query $article_query Article query.
 * @global array     $attributes
 * @global array     $newspack_blocks_post_id
 */
global $article_query, $attributes, $newspack_blocks_post_id;

$post_counter = 0;
while ( $article_query->have_posts() ) {
	$article_query->the_post();
	if ( ! $attributes['specificMode'] && ( isset( $newspack_blocks_post_id[ get_the_ID() ] ) || $post_counter >= $attributes['postsToShow'] ) ) {
		continue;
	}
	$newspack_blocks_post_id[ get_the_ID() ] = true;

	$post_counter++;

	echo newspack_template_inc( __DIR__ . '/article.php', array(
		'attributes' => $attributes,
	) );
}
wp_reset_postdata();
