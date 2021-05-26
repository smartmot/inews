<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="cw">
    <div>
        <div class="t_a_c pt_10 pb_10">
            <h2>Page not found!</h2>
        </div>
        <div class="t_a_c pb_20">
            <span>Content not found!.<br/>The content maybe deleted.</span>
        </div>
        <div class="t_a_c pb_20">
            <a class="c_l" href="<?php echo site_url(); ?>">Home</a>
        </div>

    </div>
</div>

<?php
get_footer();
