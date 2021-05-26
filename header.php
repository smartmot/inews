<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/inews/css/inews.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/inews/css/font-awesome.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v10.0&appId=397841698193320&autoLogAppEvents=1" nonce="iW2q7kTG"></script>
<div id="page" class="">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="cw">
		<div id="primary" class="">
			<main id="main" class="" role="main">

