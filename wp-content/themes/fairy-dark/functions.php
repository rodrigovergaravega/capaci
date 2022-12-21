<?php
/**
 * Loads the child theme textdomain.
 */
function fairy_dark_load_language() {
    load_child_theme_textdomain( 'fairy-dark' );
}
add_action( 'after_setup_theme', 'fairy_dark_load_language' );

if ( ! defined( 'FAIRY_DARK_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( 'FAIRY_DARK_S_VERSION', '1.0.1' );
}

/**
 * Fairy Theme Customizer default values and infer from Fairy
 *
 * @package Fairy
 */
if ( !function_exists('fairy_default_theme_options_values') ) :
    function fairy_default_theme_options_values() {
        $default_theme_options = array(
           /*Top Header*/
           'fairy-enable-top-header'=> true,
           'fairy-enable-top-header-social'=> true,
           'fairy-enable-top-header-menu'=> true,
           'fairy-enable-top-header-search'=> true,

           /*Slider Settings Option*/
           'fairy-enable-slider'=> false,
           'fairy-select-category'=> 0,
           'fairy-image-size-slider'=> 'cropped-image',

           /*Category Boxes*/
           'fairy-enable-category-boxes'=> false,
           'fairy-single-cat-posts-select-1'=> 0,


           /*Sidebar Options*/
           'fairy-sidebar-blog-page'=>'right-sidebar',
           'fairy-sidebar-single-page' =>'right-sidebar',
           'fairy-enable-sticky-sidebar'=> true,


           /*Blog Page Default Value*/
           'fairy-column-blog-page'=> 'one-column',
           'fairy-content-show-from'=>'excerpt',
           'fairy-excerpt-length'=>25,
           'fairy-pagination-options'=>'numeric',
           'fairy-read-more-text'=> esc_html__('Read More','fairy'),
           'fairy-blog-page-masonry-normal'=> 'normal',
           'fairy-blog-page-image-position'=> 'left-image',
           'fairy-image-size-blog-page'=> 'original-image',

           /*Blog Layout Overlay*/
           'fairy-site-layout-blog-overlay'=> 1,

           /*Single Page Default Value*/
           'fairy-single-page-featured-image'=> true,
           'fairy-single-page-tags'=> false,
           'fairy-enable-underline-link' => true,
           'fairy-single-page-related-posts'=> true,
           'fairy-single-page-related-posts-title'=> esc_html__('Related Posts','fairy'),


           /*Breadcrumb Settings*/
           'fairy-blog-site-breadcrumb'=> true,
           'fairy-breadcrumb-display-from-option'=> 'theme-default',
           'fairy-breadcrumb-text'=> '',

            /*General Colors*/
           'fairy-primary-color' => '#cd3636',
           'fairy-header-description-color'=>'#404040',

           'fairy-overlay-color' => 'rgba(0, 0, 0, 0.5)',
           'fairy-overlay-second-color'=> 'rgb(150 150 150 / 34%)',

           /*Footer Options*/
           'fairy-footer-copyright'=> esc_html__('All Rights Reserved 2022.','fairy'),
           'fairy-go-to-top'=> true,
           'fairy-go-to-top-icon'=> esc_html__('fa-long-arrow-up','fairy'),
           'fairy-footer-social-icons'=> false,
           'fairy-footer-mailchimp-subscribe'=> false,
           'fairy-footer-mailchimp-form-id'=> '',
           'fairy-footer-mailchimp-form-title'=>  esc_html__('Subscribe to my Newsletter','fairy'),
           'fairy-footer-mailchimp-form-subtitle'=> esc_html__('Be the first to receive the latest buzz on upcoming contests & more!','fairy'),

           /*Font Options*/
           'fairy-font-family-url'=> 'Muli:400,300italic,300',
           'fairy-font-heading-family-url'=> 'Poppins:400,500,600,700',

           /*Extra Options*/
           'fairy-post-published-updated-date'=> 'post-published',
           'fairy-font-awesome-version-loading'=> 'version-4',

        );
        return apply_filters( 'fairy_default_theme_options_values', $default_theme_options );
    }
endif;

/**
* Enqueue Style
*/
add_action( 'wp_enqueue_scripts', 'fairy_dark_style');
function fairy_dark_style() {
	wp_enqueue_style( 'fairy-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'fairy-dark-style',get_stylesheet_directory_uri() . '/style.css',array('fairy-style'));
}

if (!function_exists('fairy_footer_theme_info')) {
    /**
     * Add Powered by texts on footer
     *
     * @since 1.0.0
     */
    function fairy_footer_theme_info()
    {
        ?>
        <div class="site-info text-center">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fairy-dark' ) ); ?>">
                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf( esc_html__( 'Proudly powered by %s', 'fairy-dark' ), 'WordPress' );
                ?>
            </a>
            <span class="sep"> | </span>
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf( esc_html__( 'Theme: %1$s by %2$s.', 'fairy-dark' ), 'Fairy Dark', '<a href="http://www.candidthemes.com/">Candid Themes</a>' );
            ?>
        </div><!-- .site-info -->
        <?php
    }
}
add_action('fairy_footer_info_texts', 'fairy_footer_theme_info', 20);