<?php
/**
 * Related posts based on categories and tags.
 * 
 */

$audio_podcast_related_posts_taxonomy = get_theme_mod( 'audio_podcast_related_posts_taxonomy', 'category' );

$audio_podcast_post_args = array(
    'posts_per_page'    => absint( get_theme_mod( 'audio_podcast_related_posts_count', '3' ) ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$audio_podcast_tax_terms = wp_get_post_terms( get_the_ID(), 'category' );
$audio_podcast_terms_ids = array();
foreach( $audio_podcast_tax_terms as $tax_term ) {
	$audio_podcast_terms_ids[] = $tax_term->term_id;
}

$audio_podcast_post_args['category__in'] = $audio_podcast_terms_ids; 

if(get_theme_mod('audio_podcast_related_post',true)==1){

$audio_podcast_related_posts = new WP_Query( $audio_podcast_post_args );

if ( $audio_podcast_related_posts->have_posts() ) : ?>
    <div class="related-post">
        <h3 class="py-3"><?php echo esc_html(get_theme_mod('audio_podcast_related_post_title','Related Post'));?></h3>
        <div class="row">
            <?php while ( $audio_podcast_related_posts->have_posts() ) : $audio_podcast_related_posts->the_post(); ?>
                <?php get_template_part('template-parts/grid-layout'); ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();

}