<?php
/**
 * Header template
 *
 * @since WPPWA 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<title><?php wp_title('| ', true, 'right') . bloginfo( 'name' ); ?></title>

	<!-- PWA Metas -->
	<meta name="theme-color" content="#000" />
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">

	<!-- PWA Splash Screen -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">

	<!-- iOS Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/apple-touch-icon-180x180.png" />
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/apple-touch-icon-152x152.png" />

	<!-- Android Icons -->
	<!-- Called in manifest.json -->

	<!-- Website & Native App Icons -->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/favicon-128.png" sizes="128x128" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/favicon.ico" />

	<!-- Windows Tiles -->
	<meta name="application-name" content="<?php bloginfo('name'); ?>"/>
	<meta name="msapplication-TileColor" content="#FFF" />
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/mstile-310x310.png" />

	<?php wp_head(); ?>

</head>