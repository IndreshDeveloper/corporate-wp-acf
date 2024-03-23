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
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/wow.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick-theme.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css">
	<!-- WP Head Start -->
	<?php wp_head(); ?>
	<!-- WP Head End -->
</head>
<?php
$site_logo = get_theme_mod('custom_logo');
$imageLogo = wp_get_attachment_image_src($site_logo, 'full');
$header_btn = get_field('header_btn', 'option');
?>

<body <?php body_class(); ?>>


	<?php if ($header_btn || $site_logo): ?>
		<header id="header">
			<div class="container">
				<div class="header-main">
					<?php if ($site_logo): ?>
						<a href="<?php echo get_home_url(); ?>" rel="home">
							<img src="<?php echo $imageLogo[0]; ?>" alt="">
						</a>
					<?php endif; ?>
					<nav class="navigation">
						<?php wp_nav_menu(array('menu' => 'Header Menu', 'container' => '', 'menu_class' => 'menu-item', 'container_class' => '')); ?>
					</nav>
					<?php if ($header_btn): ?>
						<a class="btn header-btn" href="<?php echo $header_btn['url']; ?>" target="<?php echo $header_btn['target']; ?>">
							<?php echo $header_btn['title']; ?>
						</a>
					<?php endif; ?>
					<div class="menu-bar">
					<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</header>
	<?php endif; ?>